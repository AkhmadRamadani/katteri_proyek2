<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalMakananModel;
use App\Models\MenuModel;
use App\Models\PaketModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManagePackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // search package by name
        if (request()->has('search')) {
            $packages = PaketModel::where('nama_paket', 'like', '%' . request()->search . '%')->paginate(10);
            return view('admin.views.package.manage_package', ['packages' => $packages]);
        }
        // get package
        $packages = PaketModel::all();
        return view('admin.views.package.manage_package', ['packages' => $packages]);
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
            'nama_paket' => 'required',
            'deskripsi_paket' => 'required',
            'harga_paket' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // store image 
        $package = new PaketModel();

        if ($request->hasFile('foto')) {
            $fileToUpload = Storage::disk('s3')->put('/', $request->file('foto'));
            $package->foto = $fileToUpload;
        }
        $package->nama_paket = $request->nama_paket;
        $package->deskripsi = $request->deskripsi_paket;
        $package->harga_paket = $request->harga_paket;
        $package->save();
        return redirect()->route('paket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        # get package with its relationshin in jadwal_makanan, menu 
        $package =  PaketModel::with(['jadwal_makanan' => function ($query) {
            $query->orderBy('hari_id', 'asc');
        }, 'jadwal_makanan.menu', 'jadwal_makanan.hari'])->find($id);

        /// group menu by hari and add them to new array and it to package
        $menus = [
            'Senin' => [],
            'Selasa' => [],
            'Rabu' => [],
            'Kamis' => [],
            'Jumat' => [],
            'Sabtu' => [],
            'Minggu' => []
        ];
        foreach ($package->jadwal_makanan as $jadwal) {
            $menus[$jadwal->hari->nama_hari][] = $jadwal->menu->id;
        }
        $package->menus = $menus;




        $menus = MenuModel::all();
        return view('admin.views.package.detail_package', ['package' => $package, 'menus' => $menus]);
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
        // dd($request->all());
        $package = PaketModel::find($id);
        $package->nama_paket = $request->nama_paket;
        $package->deskripsi = $request->deskripsi_paket;
        $package->harga_paket = $request->harga_paket;
        if ($request->hasFile('foto')) {
            $fileToUpload = Storage::disk('s3')->put('/', $request->file('foto'));
            $package->foto = $fileToUpload;
        }
        $package->save();

        $jadwalMakanan = new JadwalMakananModel();
        if ($jadwalMakanan->where('paket_id', $id)->where('hari_id', 1)->exists()) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 1)->delete();
        }
        if ($jadwalMakanan->where('paket_id', $id)->where('hari_id', 2)->exists()) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 2)->delete();
        }
        if ($jadwalMakanan->where('paket_id', $id)->where('hari_id', 3)->exists()) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 3)->delete();
        }
        if ($jadwalMakanan->where('paket_id', $id)->where('hari_id', 4)->exists()) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 4)->delete();
        }
        if ($jadwalMakanan->where('paket_id', $id)->where('hari_id', 5)->exists()) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 5)->delete();
        }
        if ($jadwalMakanan->where('paket_id', $id)->where('hari_id', 6)->exists()) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 6)->delete();
        }
        if ($jadwalMakanan->where('paket_id', $id)->where('hari_id', 7)->exists()) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 7)->delete();
        }

        if ($request->has('menu_senin')) {
            foreach ($request->menu_senin as $menu) {
                $newJadwalMakanan = new JadwalMakananModel();
                $newJadwalMakanan->paket_id = $id; 
                $newJadwalMakanan->hari_id = 1;
                $newJadwalMakanan->menu_id = $menu;
                $newJadwalMakanan->save();
            }
        }
        if ($request->has('menu_selasa')) {
            foreach ($request->menu_selasa as $menu) {
                $newJadwalMakanan = new JadwalMakananModel();
                $newJadwalMakanan->paket_id = $id; 
                $newJadwalMakanan->hari_id = 2;
                $newJadwalMakanan->menu_id = $menu;
                $newJadwalMakanan->save();
            }
        }
        if ($request->has('menu_rabu')) {
            foreach ($request->menu_rabu as $menu) {
                $newJadwalMakanan = new JadwalMakananModel();
                $newJadwalMakanan->paket_id = $id; 
                $newJadwalMakanan->hari_id = 3;
                $newJadwalMakanan->menu_id = $menu;
                $newJadwalMakanan->save();
            }
        }
        if ($request->has('menu_kamis')) {
            foreach ($request->menu_kamis as $menu) {
                $newJadwalMakanan = new JadwalMakananModel();
                $newJadwalMakanan->paket_id = $id; 
                $newJadwalMakanan->hari_id = 4;
                $newJadwalMakanan->menu_id = $menu;
                $newJadwalMakanan->save();
            }
        }
        if ($request->has('menu_jumat')) {
            foreach ($request->menu_jumat as $menu) {
                $newJadwalMakanan = new JadwalMakananModel();
                $newJadwalMakanan->paket_id = $id; 
                $newJadwalMakanan->hari_id = 5;
                $newJadwalMakanan->menu_id = $menu;
                $newJadwalMakanan->save();
            }
        }
        if ($request->has('menu_sabtu')) {
            foreach ($request->menu_sabtu as $menu) {
                $newJadwalMakanan = new JadwalMakananModel();
                $newJadwalMakanan->paket_id = $id; 
                $newJadwalMakanan->hari_id = 6;
                $newJadwalMakanan->menu_id = $menu;
                $newJadwalMakanan->save();
            }
        }
        if ($request->has('menu_minggu')) {
            foreach ($request->menu_minggu as $menu) {
                $newJadwalMakanan = new JadwalMakananModel();
                $newJadwalMakanan->paket_id = $id; 
                $newJadwalMakanan->hari_id = 7;
                $newJadwalMakanan->menu_id = $menu;
                $newJadwalMakanan->save();
            }
        }


        return redirect()->route('paket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = PaketModel::find($id);
        $package->delete();

        return redirect()->route('paket.index');
    }
}
