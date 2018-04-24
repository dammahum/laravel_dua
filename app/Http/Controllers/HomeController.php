<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warga;
use App\Santri;
use App\User;

class HomeController extends Controller
{
    //  /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     return view('home');
    // }   

    // public function view()
    // {
    // 	$data['title'] = 'Pondok IT';
    // 	return view('welcome', $data);
    // }

    public function view($name='Pondok IT')
    {
    	$title = $name;
    	return view('title', compact('title'));
    }

    public function db()
    {
    	$warga = Warga::where('id','=',1)
                ->orderBy('nama','asc')
                ->get();

    	return view('welcome', compact('warga'));
    }

    // SANTRI PUNYA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    public function listSantri()
    {
        $santri = Santri::orderBy('id','desc')->get();
        return view('santri.index', compact('santri'));
    }

    public function insert(Request $request)
    {
        // $santri = new Santri;
        // $santri->nama = $request->nama;
        // $santri->alamat = $request->alamat;
        // $santri->tgl_lahir = $request->tgl_lahir;
        // $santri->jenis_kelamin = $request->jenis_kelamin;
        // $santri->save();

        Santri::create($request->all());

        return redirect('santri')->with('santri','Data santri berhasil ditambahkan');
    }

    public function create()
    {
        return view('santri.create');
    }

    public function update(Request $request)
    {

        // $id = $request->id;
        // $santri = Santri::find($id);
        // $santri->nama = $request->nama;
        // $santri->alamat = $request->alamat;
        // $santri->tgl_lahir = $request->tgl_lahir;
        // $santri->jenis_kelamin = $request->jenis_kelamin;
        // $santri->save();

        Santri::find($request->id)->update($request->all());

        return redirect('santri')->with('santri','Data santri berhasil diperbarui');
    }

    public function edit($id)
    {
        $santri = Santri::find($id);
        return view('santri.edit', compact('santri'));
    }

    public function hapus($id)
    {
        Santri::findOrFail($id)->delete();
        return redirect('santri')->with('santri','Data santri berhasil dihapus');
    }    
}