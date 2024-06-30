<?php

namespace App\Controllers;

class HomeA extends BaseController
{
    public function index(): string
    {
        return
            view('layout/header')
            . view('content/homeA')
            . view('layout/footer');
    }
}
