<?php

namespace App\Controllers;

class PromotionController extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('promotion/promotion')
            . view('layout/footerpettopia');
    }

    public function promo1(): string
    {
        return 
            view('layout/headerpettopia')
            . view('promotion/promo1')
            . view('layout/footerpettopia');
    }

    public function promo2(): string
    {
        return 
            view('layout/headerpettopia')
            . view('promotion/promo2')
            . view('layout/footerpettopia');
    }

    public function promo3(): string
    {
        return 
            view('layout/headerpettopia')
            . view('promotion/promo3')
            . view('layout/footerpettopia');
    }

    public function promo4(): string
    {
        return 
            view('layout/headerpettopia')
            . view('promotion/promo4')
            . view('layout/footerpettopia');
    }

    public function promo5(): string
    {
        return 
            view('layout/headerpettopia')
            . view('promotion/promo5')
            . view('layout/footerpettopia');
    }

    public function promo6(): string
    {
        return 
            view('layout/headerpettopia')
            . view('promotion/promo6')
            . view('layout/footerpettopia');
    }
}
