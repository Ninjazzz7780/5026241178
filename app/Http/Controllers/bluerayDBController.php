<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bluerayDBController extends Controller
{
    public function blueray()
    {
        // mengambil data dari table blueray dengan pagination
        $blueray = DB::table('blueray')->paginate(5);

        // mengirim data blueray ke view
        return view('blueray.blueray', ['blueray' => $blueray]);
    }

    // method untuk menampilkan form tambah blueray
    public function tambah()
    {
        return view('blueray.tambahblueray');
    }

    // method untuk insert data blueray
    public function store(Request $request)
    {
        DB::table('blueray')->insert([
            'merkblueray' => $request->merk,
            'stockblueray' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/blueray');
    }

    // method untuk edit data blueray
    public function edit($id)
    {
        $blueray = DB::table('blueray')->where('kodeblueray', $id)->get();

        return view('blueray.editblueray', ['blueray' => $blueray]);
    }

    // update data blueray
    public function update(Request $request)
    {
        DB::table('blueray')->where('kodeblueray', $request->id)->update([
            'merkblueray' => $request->merk,
            'stockblueray' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/blueray');
    }

    // method untuk hapus data blueray
    public function hapus($id)
    {
        DB::table('blueray')->where('kodeblueray', $id)->delete();

        return redirect('/blueray');
    }

    // method untuk cari data blueray
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $blueray = DB::table('blueray')
            ->where('merkblueray', 'like', "%" . $cari . "%")
            ->paginate(10);

        return view('blueray.blueray', ['blueray' => $blueray]);
    }
}
