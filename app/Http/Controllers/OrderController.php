<?php

namespace App\Http\Controllers;

use App\Models\DetailPembeliModel;
use App\Models\PaketModel;
use App\Models\PaymentModel;
use App\Models\SubscribeModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = PaketModel::all();
        return view('order_page', ['paket' => $paket]);
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
        $request->validate([
            'name' => 'required',
            'kodepos' => 'required',
            'alamat' => 'required',
            'notelp1' => 'required',
            'id_paket' => 'required',
        ]);

        $paket = PaketModel::find($request->id_paket);

        $user = auth()->user();

        $order = new SubscribeModel();
        $payment = new PaymentModel();

        $detail_pembeli = new DetailPembeliModel();

        $order->user_id = $user->id;
        $order->paket_id = $paket->id;

        $order->save();

        $payment->user_id = $user->id;
        $payment->subcription_id = $order->id;
        $payment->status = 0;
        $payment->tagihan = $paket->harga_paket;
        $payment->bukti_pembayaran = null;

        $payment->save();

        $detail_pembeli->subscribe_id = $order->id;
        $detail_pembeli->nama = $request->name;
        $detail_pembeli->kode_pos = $request->kodepos;
        $detail_pembeli->alamat = $request->alamat;
        $detail_pembeli->no_telp_1 = $request->notelp1;
        $detail_pembeli->no_telp_2 = $request->notelp2;

        $detail_pembeli->save();

        return redirect()->route('payment.show', $payment->id);
    
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
