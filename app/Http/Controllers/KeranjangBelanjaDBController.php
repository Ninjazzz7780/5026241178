<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table keranjangbelanja
    	//$keranjangbelanja = DB::table('keranjangbelanja')->get();

        // mengambil data dari table keranjangbelanja dengan pagination
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data keranjangbelanja ke view index
    	return view('KeranjangBelanja.index', ['keranjangbelanja' => $keranjangbelanja]);

    }
    	// method untuk menampilkan view form tambah keranjangbelanja
	public function beli()
	{

		// memanggil view tambah
		return view('KeranjangBelanja.tambah');

	}

	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
    {
        // insert data ke tabel keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        // setelah tambah data, kembali ke halaman index
        return redirect('/keranjangbelanja');
    }

	public function batal($id)
    {
        // hapus data berdasarkan ID
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // kembali ke halaman index
        return redirect('/keranjangbelanja');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table keranjangbelanja sesuai pencarian data
		$keranjangbelanja = DB::table('keranjangbelanja')
		->where('keranjangbelanja_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data keranjangbelanja ke view index
		return view('KeranjangBelanja.index',['keranjangbelanja' => $keranjangbelanja]);

	}
}
