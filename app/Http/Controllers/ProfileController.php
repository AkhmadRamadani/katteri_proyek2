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
        $subscribe = SubscribeModel::where('user_id', $user->id)->with('paket', 'payment')->get();

        return view('userprofile_page', ['user' => $user, 'subscribe' => $subscribe]);
    }
}
