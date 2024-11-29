<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        return view('Barang.masuk');
    }

    public function show() {
        $databarang = DataBarang::all();
        return view('BarangShow.baranginput', compact('databarang'));
    }

    public function input(Request $request)
    {
        $databarang = new DataBarang();
        $databarang->nama_barang = $request->input('nama_barang');
        $databarang->spesifikasi = $request->input('spesifikasi');
        $databarang->sumber_pengadaan = $request->input('sumber_pengadaan');
        $databarang->jumlah = $request->input('jumlah');
        $databarang->kondisi = $request->input('kondisi');

        $databarang->save();

        return redirect()->route('barangmasuk.masuk')->with('success', 'Data peminjaman berhasil ditambahkan.');
    }
}
