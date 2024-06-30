<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Libraries\Hash;

class Auth extends BaseController
{

    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function index()
    {
        return view('auth/login');
    }


    public function save()
    {
        // $validation = $this->validate([
        //     'name' => 'required',
        //     'email' => 'required|valid_email|is_unique[user.email]',
        //     'password' => 'required|min_length[5]|max_length[20]',
        //     'cpassword' => 'required|min_length[5]|max_length[20]|matches[password]',
        //     'username' => 'required'
        // ]);

        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your full name is required',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
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
                    'min_length' => 'password must have atleast 5 characters in length',
                    'max_length' => 'password must not have characters more than 20 in length'
                ]
            ],
            // 'cpassword' => [
            //     'rules' => 'required|min_length[5]|max_length[20]|matches[password]',
            //     'errors' => [
            //         'required' => 'Your as is required',
            //         'min_length' => 'Confirm password must have atleast 5 characters in length',
            //         'max_length' => 'Confirm password must not have characters more than 20 in length'
            //     ]
            // ],
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
            $photo = $this->request->getPost('photo');

            $values = [
                'name' => $name,
                'email' => $email,
                'username' => $username,
                'password' => Hash::make($password),
                'photo' => $photo
            ];

            $userModel = new UserModel();
            $query = $userModel->insert($values);
            if (!$query) {
                return redirect()->to('/auth')->with('fail', 'Something went wrong');
            } else {
                return redirect()->to('auth/index')->with('success', 'You are now registered successfully');
            }
        }

        // $userModel = new UserModel; 

        // $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // $userModel->insert($_POST);
        // return redirect()->to(base_url('auth'));
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
                    'min_length' => 'password must have atleast 5 characters in length',
                    'max_length' => 'password must not have characters more than 20 in length'
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

            if(!$process_password){
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to('/auth')->withInput();
            }else{
                $user_id = $user_info['id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('/home');
            }
        }
    }

    public function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('/auth?access=out')->with('fail', 'You are logged out!');
        }
    }
}
