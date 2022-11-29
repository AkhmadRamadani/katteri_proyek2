<?php

namespace App\Http\Controllers;

use App\Models\SubscribeModel;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        /// get user subscription with paket and payment
        $subscribe = SubscribeModel::where('user_id', $user->id)->with('paket', 'payment')->get();

        // $subscribe = SubscribeModel::where('user_id', $user->id)->with('paket')->get();
        
        // dd($subscribe);
        return view('userprofile_page', ['user' => $user, 'subscribe' => $subscribe]);
    }
}
