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

    public function about()
    {
        return view('about');
    }

    public function bod()
    {
        return view('bod');
    }
}
