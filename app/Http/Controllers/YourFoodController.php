<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourFoodController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /// get my order
        
        return view('yourfood_page');
    }
}
