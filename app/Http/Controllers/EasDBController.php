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
    	return view('eas.index', compact('mypegawai'));
    }
    public function view($kodepegawai)
    {
        // mengambil data eas berdasarkan id
        $mypegawai = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->first();

        // mengirim data eas ke view index
        return view('eas.view', compact('mypegawai'));
    }
    public function tambah()
    {
        // memanggil view tambah
        return view('eas.tambah');
    }
    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|alpha_num|max:9|unique:mypegawai,kodepegawai',
            'namalengkap' => 'required|alpha|max:50',
        ]);
        // insert data ke table eas
        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departmen' => $request->departmen
        ]);

        // alihkan halaman ke halaman eas
        return redirect()->route('eas.index')->with('success', 'Data pegawai berhasil ditambahkan');
    }
}
