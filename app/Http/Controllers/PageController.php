<?php namespace App\Http\Controllers;

use View;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
