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
        $paket = PaketModel::with(['jadwal_makanan' => function ($query) {
            $query->orderBy('hari_id', 'asc');
        }, 'jadwal_makanan.menu', 'jadwal_makanan.hari'])->get();

        $paket = $paket->map(function ($item) {
            $item->jadwal_makanan = $item->jadwal_makanan->groupBy('hari_id');
            return $item;
        });

        return view('menulist_page', ['paket' => $paket]);
    }
}
