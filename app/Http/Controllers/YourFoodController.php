<?php

namespace App\Http\Controllers;

use App\Models\SubscribeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class YourFoodController extends Controller
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
        $user = Auth::user();
        /// order by id 
        /// below code and add with payment model and only show when the payment status is 2
        $subscribe = SubscribeModel::where('user_id', $user->id)->with('paket', 'detail_pembeli', 'paket.jadwal_makanan', 'paket.jadwal_makanan.hari', 'paket.jadwal_makanan.menu', 'payment')->orderBy('id', 'desc')->whereHas('payment', function ($query) {
            $query->where('status', 2);
        })->first();
        // $subscribe = SubscribeModel::where('user_id', $user->id)->with('paket', 'detail_pembeli', 'paket.jadwal_makanan', 'paket.jadwal_makanan.hari', 'paket.jadwal_makanan.menu')->orderBy('id', 'desc')->first();


        if ($subscribe != null) {
            $subscribe->paket->jadwal_makanan = $subscribe->paket->jadwal_makanan->groupBy('hari_id');

            $subscribe->paket->jadwal_makanan = $subscribe->paket->jadwal_makanan->map(function ($item) {
                $item = $item->groupBy('hari_id');
                return $item;
            });
        }


        return view('yourfood_page', ['subscribe' => $subscribe]);
    }
}
