<?php

namespace App\Http\Controllers;

use App\Models\KartuAlatRusak;
use App\Models\KartuPerawatan;
use App\Models\StokBahan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function kartuAlatRusak()
    {
        $alatrusak = KartuAlatRusak::all();
        return view('Laporan.kartualatrusak', compact('alatrusak'));
    }

    public function store(Request $request)
    {
        $alatrusak = new KartuAlatRusak();
        $alatrusak->nama_alat = $request->input('nama_alat');
        $alatrusak->tanggal = $request->input('tanggal');
        $alatrusak->keterangan = $request->input('no_iventaris');
        $alatrusak->kerusakan = $request->input('kerusakan');
        $alatrusak->keterangan = $request->input('keterangan');

        $alatrusak->save();

        return redirect()->route('laporan.kartuAlatRusak')->with('success', 'Data alat rusak berhasil ditambahkan.');
    }

    public function kartuPerawatan()
    {
        $kartuperawatan = KartuPerawatan::all();
        return view('Laporan.kartuperawatan', compact('kartuperawatan'));
    }

    public function input(Request $request)
    {
        $kartuperawatan = new KartuPerawatan();
        $kartuperawatan->alat_diperbaiki = $request->input('alat_diperbaiki');
        $kartuperawatan->Spesifikasi = $request->input('Spesifikasi');
        $kartuperawatan->keterangan = $request->input('keterangan');

        $kartuperawatan->save();

        return redirect()->route('laporan.kartuPerawatan')->with('success', 'Data perawatan alat berhasil ditambahkan.');
    }

    public function kartuInventarisUpdate()
    {
        return view('Laporan.iventarisupdate');
    }

    public function kartuStokBahan()
    {
        $stokbahan = StokBahan::all();
        return view('Laporan.stokbahan', compact('stokbahan'));
    }

    public function create(Request $request)
    {
        $stokbahan = new StokBahan();
        $stokbahan->nama_barang = $request->input('nama_barang');
        $stokbahan->satuan = $request->input('satuan');
        $stokbahan->stok_awal = $request->input('stok_awal');
        $stokbahan->tambahan_stok = $request->input('tambahan_stok');
        $stokbahan->jumlah_mutulasikeluar = $request->input('jumlah_mutulasikeluar');
        $stokbahan->sisa_stok = $request->input('sisa_stok');
        $stokbahan->angka_diperoleh = $request->input('angka_diperoleh');
        $stokbahan->tanggal_update = $request->input('tanggal_update');
        $stokbahan->total = $validated['total'] ?? $stokbahan->stok_awal + $stokbahan->tambahan_stok; 
        $stokbahan->save();

        return redirect()->route('laporan.kartuStokBahan')->with('success', 'Data stok bahan berhasil ditambahkan.');
    }


    public function beritaAcara()
    {
        return view('Laporan.stokbahan');
    }
}

