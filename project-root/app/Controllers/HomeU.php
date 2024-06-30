<?php

namespace App\Controllers;

class HomeU extends BaseController
{
    public function index(): string
    {
        return
            view('layout/header')
            . view('content/homeU')
            . view('layout/footer');
    }
}
