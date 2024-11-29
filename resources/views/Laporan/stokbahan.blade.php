@extends('layouts.app')

@section('contents')
<div class="container mt-4">
    <h2>Input Kartu Stok Bahan</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('laporan.kartuStokBahan') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang" required>
        </div>
        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Masukkan satuan" required>
        </div>
        <div class="mb-3">
            <label for="stok_awal" class="form-label">Stok Awal</label>
            <input type="text" class="form-control" id="stok_awal" name="stok_awal" placeholder="Masukkan stok awal" required>
        </div>
        <div class="mb-3">
            <label for="tambahan_stok" class="form-label">Tambahan Stok</label>
            <input type="text" class="form-control" id="tambahan_stok" name="tambahan_stok" placeholder="Masukkan tambahan stok" required>
        </div>
        <div class="mb-3">
            <label for="jumlah_mutulasikeluar" class="form-label">Jumlah Mutulasi Keluar</label>
            <input type="text" class="form-control" id="jumlah_mutulasikeluar" name="jumlah_mutulasikeluar" placeholder="Masukkan mutulasi keluar" required>
        </div>
        <div class="mb-3">
            <label for="sisa_stok" class="form-label">Sisa Stok</label>
            <input type="text" class="form-control" id="sisa_stok" name="sisa_stok" placeholder="Masukkan sisa stok" required>
        </div>
        <div class="mb-3">
            <label for="angka_diperoleh" class="form-label">Angka Peroleh</label>
            <input type="text" class="form-control" id="angka_diperoleh" name="angka_diperoleh" placeholder="Masukkan angka diperoleh" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_update" class="form-label">Tanggal Update</label>
            <input type="date" class="form-control" id="tanggal_update" name="tanggal_update" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="text" class="form-control" id="total" name="total" placeholder="Masukkan total" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
