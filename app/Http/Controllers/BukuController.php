<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    // Menampilkan data buku dengan pagination (Halaman Utama)
    public function index()
    {
        $buku = DB::table('buku')->paginate(10);
        return view('buku.index', ['buku' => $buku]);
    }

    // Mencari data buku berdasarkan merk
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $buku = DB::table('buku')
            ->where('merkbuku', 'like', "%" . $cari . "%")
            ->paginate(10);
        return view('buku.index', ['buku' => $buku]);
    }

    // Menampilkan form tambah buku
    public function tambah()
    {
        return view('buku.tambah');
    }

    // Menyimpan data buku baru ke database
    public function store(Request $request)
    {
        // Pastikan nilai tersedia berupa karakter tunggal (misal 'Y' atau 'N')
        $tersedia = $request->has('tersedia') ? 'Y' : 'N';

        DB::table('buku')->insert([
            'merkbuku'   => $request->merkbuku,
            'stockbuku'  => $request->stockbuku,
            'tersedia'   => $tersedia
        ]);
        return redirect('/buku');
    }

    // Menampilkan form edit buku
    public function edit($id)
    {
        $buku = DB::table('buku')->where('kodebuku', $id)->get();
        return view('buku.edit', ['buku' => $buku]);
    }

    // Memperbarui data buku di database
    public function update(Request $request)
    {
        $tersedia = $request->has('tersedia') ? 'Y' : 'N';

        DB::table('buku')->where('kodebuku', $request->id)->update([
            'merkbuku'   => $request->merkbuku,
            'stockbuku'  => $request->stockbuku,
            'tersedia'   => $tersedia
        ]);
        return redirect('/buku');
    }

    // Menghapus data buku
    public function hapus($id)
    {
        DB::table('buku')->where('kodebuku', $id)->delete();
        return redirect('/buku');
    }
}
