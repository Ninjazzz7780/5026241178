<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EasDBController extends Controller
{
    public function index()
    {

        // mengambil data dari table eas dengan pagination
        $mypegawai = DB::table('mypegawai')->get();

    	// mengirim data eas ke view index
    	return view('Eas.index', compact('mypegawai'));
    }
    public function view($kodepegawai)
    {
        // mengambil data eas berdasarkan id
        $mypegawai = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->first();

        // mengirim data eas ke view index
        return view('Eas.view', compact('mypegawai'));
    }
    public function tambah()
    {
        // memanggil view tambah
        return view('Eas.tambah');
    }
    public function store(Request $request)
    {
        // insert data ke table eas
        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departmen' => $request->departmen
        ]);

        // alihkan halaman ke halaman eas
        return redirect('/eas');
    }
}
