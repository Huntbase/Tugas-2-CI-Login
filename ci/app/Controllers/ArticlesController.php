<?php

namespace App\Controllers;

class ArticlesController extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('articles/articles')
            . view('layout/footerpettopia');
    }

    public function article1(): string
    {
        return 
            view('layout/headerpettopia')
            . view('articles/article1')
            . view('layout/footerpettopia');
    }

    public function article2(): string
    {
        return 
            view('layout/headerpettopia')
            . view('articles/article2')
            . view('layout/footerpettopia');
    }

    public function article3(): string
    {
        return 
            view('layout/headerpettopia')
            . view('articles/article3')
            . view('layout/footerpettopia');
    }

    public function article4(): string
    {
        return 
            view('layout/headerpettopia')
            . view('articles/article4')
            . view('layout/footerpettopia');
    }

    public function article5(): string
    {
        return 
            view('layout/headerpettopia')
            . view('articles/article5')
            . view('layout/footerpettopia');
    }

    public function article6(): string
    {
        return 
            view('layout/headerpettopia')
            . view('articles/article6')
            . view('layout/footerpettopia');
    }
}
