<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaketModel;
use App\Models\SubscribeModel;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    /// constructor
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /// get all subscriptions with payment that status is 2 
        $success_subs = SubscribeModel::with('payment')->whereHas('payment', function ($query) {
            $query->where('status', 2);
        })->get();
        /// get all subscriptions with payment that status is 3
        $rejected_subs = SubscribeModel::with('payment')->whereHas('payment', function ($query) {
            $query->where('status', 3);
        })->get();
        /// get all subscriptions with payment that status is 0 and 1
        $new_subs = SubscribeModel::with('payment')->whereHas('payment', function ($query) {
            $query->where('status', 0)->orWhere('status', 1);
        })->get();

        /// all subscriptions
        $subscriptions = SubscribeModel::with('payment')->get();
        // get user with role 2
        $users = User::where('role', 2)->get();
        // get all packages and sort by created_at
        $packages = PaketModel::orderBy('created_at', 'desc')->get();
        // get user in this month
        $users_this_month = User::where('role', 2)->whereMonth('created_at', date('m'))->get();
        return view('admin.views.dashboard', ['packages' => $packages, 'success_subs' => $success_subs, 'users' => $users, 'users_this_month' => $users_this_month, 'new_subs' => $new_subs, 'rejected_subs' => $rejected_subs, 'subscriptions' => $subscriptions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
