<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ManageMenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /// search menu by name
        if (request()->has('search')) {
            $menus = MenuModel::where('nama_menu', 'like', '%' . request()->search . '%')->paginate(10);
            // retrieve foto from s3
            return view('admin.views.package.manage_menus', ['menus' => $menus]);
        }
        // menu with pagination
        $menus = MenuModel::paginate(10);
        return view('admin.views.package.manage_menus', ['menus' => $menus]);
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
            'nama_menu' => 'required',
            'deskripsi_menu' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $menu = new MenuModel();
        $menu->nama_menu = $request->nama_menu;
        $menu->deskripsi = $request->deskripsi_menu;
        $menu->nutrition_facts = $request->nutrition_facts;
        $menu->qr_code = null;
        if ($request->hasFile('foto')) {
            $fileToUpload = Storage::disk('s3')->put('/',$request->file('foto'));
            $menu->foto = $fileToUpload;
            
        }

        $menu->save();

        /// get latest menu id
        $menu_id = $menu->id;

        /// generate qrcode for menu and save it to variable qrcode
        // $qrcode = QrCode::format('png')->size(200)->save('http://127.0.0.1:8000/menu-detail/' . $menu_id, 'qr_codes', 'qrcode.png');

        $qrcode = QrCode::format('png')
            ->size(200)->errorCorrection('H')
            ->generate(env('APP_URL') . '/menu-detail/' . $menu_id);
        $output_file = '/qr-' . time() . '.png';
        Storage::disk('s3')->put($output_file, $qrcode);

        /// save qrcode to database
        $menu->qr_code = $output_file;

        /// save to database
        $menu->save();

        return redirect()->route('menu.index');
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
        // if user upload new image
        if ($request->hasFile('foto')) {
            $fileToUpload = Storage::disk('s3')->put('/', $request->file('foto'));

            $menu = MenuModel::find($id);
            $menu->nama_menu = $request->nama_menu;
            $menu->deskripsi = $request->deskripsi_menu;
            $menu->nutrition_facts = $request->nutrition_facts;
            $menu->foto =  $fileToUpload;
            $menu->save();

            return redirect()->route('menu.index');
        } else {
            $menu = MenuModel::find($id);
            $menu->nama_menu = $request->nama_menu;
            $menu->deskripsi = $request->deskripsi_menu;
            $menu->nutrition_facts = $request->nutrition_facts;
            $menu->save();

            return redirect()->route('menu.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = MenuModel::find($id);
        $menu->delete();

        return redirect()->route('menu.index');
    }
}
