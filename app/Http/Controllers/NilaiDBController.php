<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiDBController extends Controller
{
    public function index()
    {
        $n = DB::table('nilaikuliah')->get();

        // mengirim data nilai ke view index
        return view('Nilaikuliah.index', ['nilaikuliah' => $n]);
    }

    // method untuk menampilkan view form tambah nilaikuliah
    public function tambah()
    {
        return view('Nilaikuliah.tambah');
    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $insert)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $insert->NRP,
            'NilaiAngka' => $insert->NilaiAngka,
            'SKS' => $insert->SKS
        ]);

        return redirect('/nilaikuliah');
    }
}
