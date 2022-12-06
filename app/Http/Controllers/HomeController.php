<?php

namespace App\Http\Controllers;

use App\Models\PaketModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
        /// redirect to admin dashboard if user is admin
        $user = auth()->user();
        if($user != null && $user->role == 1){
            return redirect()->route('admin');
        }
        $paket = PaketModel::all();
        return view('home', ['paket' => $paket, 'user' => $user]);
    }
}
