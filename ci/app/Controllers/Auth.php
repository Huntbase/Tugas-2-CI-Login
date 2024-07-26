<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Libraries\Hash;

class Auth extends BaseController
{

    public function __construct()
    {
        helper(['url', 'form']);
        $this->email = \Config\Services::email(); // Memuat library email
    }

    public function index()
    {
        return view('auth/login');
    }

    public function save()
    {
        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your full name is required',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Your email is required',
                    'valid_email' => 'You must enter a valid email',
                    'is_unique' => 'Email already taken'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required' => 'Password is required',
                    'min_length' => 'Password must have at least 5 characters in length',
                    'max_length' => 'Password must not have more than 20 characters in length'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your username is required',
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/login', ['validation' => $this->validator]);
        } else {
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $values = [
                'name' => $name,
                'email' => $email,
                'username' => $username,
                'password' => Hash::make($password),
                'role' => 'user' // Default role
            ];

            $userModel = new UserModel();
            $query = $userModel->insert($values);
            if (!$query) {
                return redirect()->to('auth/index')->with('fail', 'Something went wrong');
            } else {
                return redirect()->to('auth/index')->with('success', 'You are now registered successfully');
            }
        }
    }

    public function process()
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Your email is required',
                    'valid_email' => 'You must enter a valid email',
                    'is_not_unique' => 'This email is not registered on our service'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required' => 'Password is required',
                    'min_length' => 'Password must have at least 5 characters in length',
                    'max_length' => 'Password must not have more than 20 characters in length'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/login', ['validation' => $this->validator]);
        } else {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();
            $process_password = Hash::process($password, $user_info['password']);

            if (!$process_password) {
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to('auth/index')->withInput();
            } else {
                $user_id = $user_info['id'];
                session()->set('loggedUser', $user_id);
                session()->set('userRole', $user_info['role']); // Tambahkan role ke session

                if ($user_info['role'] == 'admin') {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/pettopia/index');
                }
            }
        }
    }

    public function logout()
    {
        if (session()->has('loggedUser')) {
            session()->remove('loggedUser');
            return redirect()->to('/auth?access=out')->with('fail', 'You are logged out!');
        }
    }

    public function forgot_password()
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Your email is required',
                    'valid_email' => 'You must enter a valid email',
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/forgot_password', ['validation' => $this->validator]);
        } else {
            $email = $this->request->getPost('email');
            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();

            if ($user_info) {
                $token = bin2hex(random_bytes(50));
                $userModel->update($user_info['id'], ['reset_token' => $token]);

                $this->email->setFrom('your-email@gmail.com', 'Your Name'); // Set the "From" header
                $this->email->setTo($email);
                $this->email->setSubject('Reset Your Password');
                $this->email->setMessage("Please click on the link to reset your password: <a href='" . base_url('auth/reset_password/' . $token) . "'>Reset Password</a>");

                if (!$this->email->send()) {
                    log_message('error', 'Gagal mengirim email: ' . $this->email->printDebugger());
                    echo $this->email->printDebugger();
                } else {
                    log_message('info', 'Email terkirim ke: ' . $email);
                    return redirect()->to('/auth/forgot_password')->with('success', 'A password reset link has been sent to your email.');
                }
            } else {
                return redirect()->to('/auth/forgot_password')->with('fail', 'Email not found.');
            }
        }
    }

    public function forgot_password_process()
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Your email is required',
                    'valid_email' => 'You must enter a valid email',
                    'is_not_unique' => 'This email is not registered on our service'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/forgot_password', ['validation' => $this->validator]);
        } else {
            $email = $this->request->getPost('email');
            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();

            if ($user_info) {
                $token = bin2hex(random_bytes(50));
                $userModel->update($user_info['id'], ['reset_token' => $token]);

                $this->email->setFrom('denisjeni96@gmail.com', 'Dens Gans'); // Set the "From" header
                $this->email->setTo($email);
                $this->email->setSubject('Reset Your Password Pettopia');
                $this->email->setMessage("Please click on the link to reset your password Pettopia : <a href='" . base_url('auth/reset_password/' . $token) . "'>Reset Password</a>");

                if (!$this->email->send()) {
                    log_message('error', 'Gagal mengirim email: ' . $this->email->printDebugger());
                    echo $this->email->printDebugger();
                } else {
                    log_message('info', 'Email terkirim ke: ' . $email);
                    return redirect()->to('/auth/forgot_password')->with('success', 'A password reset link has been sent to your email.');
                }
            } else {
                return redirect()->to('/auth/forgot_password')->with('fail', 'Email not found.');
            }
        }
    }



    public function reset_password($token = null)
    {
        if ($token) {
            $userModel = new UserModel();
            $user_info = $userModel->where('reset_token', $token)->first();

            if ($user_info) {
                return view('auth/reset_password', ['token' => $token]);
            } else {
                return redirect()->to('/auth/index')->with('fail', 'Invalid token.');
            }
        } else {
            return redirect()->to('/auth/index')->with('fail', 'No token provided.');
        }
    }

    public function reset_password_process()
    {
        $validation = $this->validate([
            'password' => [
                'rules' => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required' => 'Password is required',
                    'min_length' => 'Password must have at least 5 characters in length',
                    'max_length' => 'Password must not have more than 20 characters in length'
                ]
            ],
            'cpassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Confirm Password is required',
                    'matches' => 'Confirm Password does not match with Password'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/reset_password', ['validation' => $this->validator, 'token' => $this->request->getPost('token')]);
        } else {
            $password = $this->request->getPost('password');
            $token = $this->request->getPost('token');
            $userModel = new UserModel();
            $user_info = $userModel->where('reset_token', $token)->first();

            if ($user_info) {
                $userModel->update($user_info['id'], [
                    'password' => Hash::make($password),
                    'reset_token' => null
                ]);

                return redirect()->to('/auth/index')->with('success', 'Password has been reset successfully. You can now login with your new password.');
            } else {
                return redirect()->to('/auth/index')->with('fail', 'Invalid token.');
            }
        }
    }
}
