<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalMakananModel;
use App\Models\MenuModel;
use App\Models\PaketModel;
use App\Models\User;
use Illuminate\Http\Request;

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
        // store image 
        $fileToUpload = $request->file('foto')->store('packages', 'public');
        $package = new PaketModel();
        $package->nama_paket = $request->nama_paket;
        $package->deskripsi = $request->deskripsi_paket;
        $package->harga_paket = $request->harga_paket;
        $package->foto = $fileToUpload;
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
            $fileToUpload = $request->file('foto')->store('packages', 'public');
            $package->foto = $fileToUpload;
        }
        $package->save();

        $jadwalMakanan = new JadwalMakananModel();
        if ($request->has('menu_senin')) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 1)->delete();
            foreach ($request->menu_senin as $menu) {
                $jadwalMakanan->create([
                    'paket_id' => $id,
                    'hari_id' => 1,
                    'menu_id' => $menu
                ]);
            }
        }
        if ($request->has('menu_selasa')) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 2)->delete();
            foreach ($request->menu_selasa as $menu) {
                $jadwalMakanan->create([
                    'paket_id' => $id,
                    'hari_id' => 2,
                    'menu_id' => $menu
                ]);
            }
        }
        if ($request->has('menu_rabu')) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 3)->delete();
            foreach ($request->menu_rabu as $menu) {
                $jadwalMakanan->create([
                    'paket_id' => $id,
                    'hari_id' => 3,
                    'menu_id' => $menu
                ]);
            }
        }
        if ($request->has('menu_kamis')) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 4)->delete();
            foreach ($request->menu_kamis as $menu) {
                $jadwalMakanan->create([
                    'paket_id' => $id,
                    'hari_id' => 4,
                    'menu_id' => $menu
                ]);
            }
        }
        if ($request->has('menu_jumat')) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 5)->delete();
            foreach ($request->menu_jumat as $menu) {
                $jadwalMakanan->create([
                    'paket_id' => $id,
                    'hari_id' => 5,
                    'menu_id' => $menu
                ]);
            }
        }
        if ($request->has('menu_sabtu')) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 6)->delete();
            foreach ($request->menu_sabtu as $menu) {
                $jadwalMakanan->create([
                    'paket_id' => $id,
                    'hari_id' => 6,
                    'menu_id' => $menu
                ]);
            }
        }
        if ($request->has('menu_minggu')) {
            $jadwalMakanan->where('paket_id', $id)->where('hari_id', 7)->delete();
            foreach ($request->menu_minggu as $menu) {
                $jadwalMakanan->create([
                    'paket_id' => $id,
                    'hari_id' => 7,
                    'menu_id' => $menu
                ]);
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
