<?php namespace App\Http\Controllers;

use View;

class IndexController extends Controller
{
    protected $layout = 'layouts.main';

    /**
     * Constructor, duh!
     *
     * @access      public
     * @return      void
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application index.
     *
     * @access      public
     * @return      Response
     *
     */
} // end of class
