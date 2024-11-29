@extends('layouts.app')

@section('contents')
<div class="container mt-8">
    <h2>Input Data Barang</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('barangkeluar.keluar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Alat dan Bahan</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>
        <div class="mb-3">
            <label for="spesifikasi" class="form-label">Spesifikasi</label>
            <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" required>
        </div>
        <div class="mb-3">
            <label for="sumber_pengadaan" class="form-label">Sumber Pengadaan</label>
            <input type="text" class="form-control" id="sumber_pengadaan" name="sumber_pengadaan" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <div class="mb-3">
            <label for="kondisi" class="form-label">Kondisi</label>
            <select class="form-control" id="kondisi" name="kondisi" required>
                <option value="" disabled selected>Pilih Kondisi</option>
                <option value="baik">Baik</option>
                <option value="rusak">Rusak</option>
            </select>
        </div>    
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
