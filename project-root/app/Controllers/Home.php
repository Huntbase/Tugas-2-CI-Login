<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return
            view('layout/header')
            . view('content/home')
            . view('layout/footer');
    }
}
