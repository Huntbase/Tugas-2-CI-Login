<?php

namespace App\Controllers;

class login extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('content/loginpettopia')
            . view('layout/footerpettopia');
    }
}
