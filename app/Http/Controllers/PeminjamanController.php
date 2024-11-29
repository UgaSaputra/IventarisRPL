<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanPraktikum;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = PeminjamanPraktikum::all();
        return view('Peminjaman.untukpraktik', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        $peminjaman = new PeminjamanPraktikum();
        $peminjaman->nama_alat = $request->input('nama_alat');
        $peminjaman->nama_peminjam = $request->input('nama_peminjam');
        $peminjaman->spesifikasi = $request->input('spesifikasi');
        $peminjaman->no_iventaris = $request->input('no_iventaris');
        $peminjaman->tanggal_pinjam = $request->input('tanggal_pinjam');
        $peminjaman->tanggal_kembali = $request->input('tanggal_kembali');
        $peminjaman->nama_laboran = $request->input('nama_laboran');
        $peminjaman->nama_praktikum = $request->input("nama_praktikum");
        $peminjaman->jumlah = $request->input('jumlah');
        $peminjaman->keadaan = $request->input('keadaan');

        $peminjaman->save();

        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil ditambahkan.');
    }

}
