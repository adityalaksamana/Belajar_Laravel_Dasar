<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function tambah_produk() {
        return view('tambah_produk');
    }

    public function tambah_produk_post(Request $request) {
        $tambah_data = Product::insert([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'gambar_produk' => $request->gambar_produk,
            'deskripsi' => $request->deskripsi_produk

        ]);

        if($tambah_data) {
            return back()->with('succes', 'Berhasil Menambah Data');
        } else {
            return back()->with('error', 'Gagal Menambah Data');
        }
    }
}
