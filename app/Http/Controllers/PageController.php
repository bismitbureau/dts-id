<?php namespace App\Http\Controllers;

use View;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function articleList(){
        return view('articleList');
    }
    
    public function articleSingle(){
        return view('articleSingle');
    }
    
    public function articleTag(){
        return view('articleTag');
    }

    public function researchList(){
        return view('researchList');
    }

    public function profile(){
        return view('profile');
    }

    public function gallery(){
        return view('gallery');
    }

    public function about()
    {
        return view('about');
    }

    public function bod()
    {
        return view('bod');
    }

    public function faq(){
        return view('faq');
    }

    public function underConstruction(){
        return view('underConstruction');
    }

}
