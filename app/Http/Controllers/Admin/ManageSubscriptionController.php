<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentModel;
use App\Models\SubscribeModel;
use App\Models\User;
use Illuminate\Http\Request;

class ManageSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all subscription with paket, and detail pembeli and payment
        $subscriptions = SubscribeModel::with('paket', 'detail_pembeli', 'payment')->get();
        /// divide subscription by status
        /// if status is 0 && 1, put it to $new_subs
        /// if status is 2 && 3, put it to history_subs
        $new_subs = [];
        $history_subs = [];
        foreach ($subscriptions as $subscription) {
            if ($subscription->payment->status == 0 || $subscription->payment->status == 1) {
                array_push($new_subs, $subscription);
            } else {
                array_push($history_subs, $subscription);
            }
        }
        return view('admin.views.subscription.manage_subscription', ['subscriptions' => $new_subs, 'history_subs' => $history_subs]);
        
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
        // get payment data where subcription_id is $id
        $payment = PaymentModel::where('subcription_id', $id)->first();
        
        // update payment data
        $payment->status = $request->status;
        $payment->save();

        return redirect()->route('subscription.index');
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
