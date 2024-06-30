<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'Articels',
            'userInfo' => $userInfo
        ];
        return view('content/articels', $data);
    }
}
