<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function create()
    {
        return view('Alat.bahan'); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        return redirect()->route('barang.create')->with('success', 'Data barang berhasil ditambahkan!');
    }

    public function index() {
        return view('Iventaris.index');
    }
}
