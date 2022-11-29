<?php

namespace App\Http\Controllers;

use App\Models\PaketModel;
use Illuminate\Http\Request;

class MenuListController extends Controller
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
        /// get paket with jadwal_makanan and its menu and hari, group by hari and add them to array
        $paket = PaketModel::with(['jadwal_makanan' => function ($query) {
            $query->orderBy('hari_id', 'asc');
        }, 'jadwal_makanan.menu', 'jadwal_makanan.hari'])->get();

        $paket = $paket->map(function ($item) {
            $item->jadwal_makanan = $item->jadwal_makanan->groupBy('hari_id');
            return $item;
        });

        
        

        // $paket = PaketModel::with(['jadwal_makanan' => function ($query) {
        //     $query->with('menu')->orderBy('hari_id', 'asc');
        // }])->get()->groupBy('jadwal_makanan.hari.hari');
       
        // $paket = PaketModel::with(['jadwal_makanan' => function ($query) {
        //     $query->orderBy('hari_id', 'asc');
        // }, 'jadwal_makanan.menu', 'jadwal_makanan.hari'])->get()->groupBy('jadwal_makanan.hari.hari');
        // $paket = PaketModel::with(['jadwal_makanan' => function ($query) {
        //     $query->orderBy('hari_id', 'asc');
        // }, 'jadwal_makanan.menu'])->get();

        return view('menulist_page', ['paket' => $paket]);
    }
}
