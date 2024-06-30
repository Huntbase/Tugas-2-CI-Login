<?php

namespace App\Controllers;

class pettopia extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('content/homepettopia')
            . view('layout/footerpettopia');
    }
}
