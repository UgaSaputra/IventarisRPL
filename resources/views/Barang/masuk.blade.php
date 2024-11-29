@extends('layouts.app')

@section('contents')
<div class="mb-3">
    <label for="nama_barang" class="form-label">Data Barang</label>
    <select class="form-control" id="nama_barang" name="nama_barang" required>
        <option value="">-- Pilih Data Barang --</option>
        @foreach($databarang as $barang)
            <option value="{{ $barang->nama_barang }}">{{ $barang->nama_barang }}</option>
        @endforeach
    </select>
</div>
<div class="container mt-8">
    <h2>Daftar Barang</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Alat dan Bahan</th>
                <th>Spesifikasi</th>
                <th>Sumber Pengadaan</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Paraf Petugas</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
</div>
@endsection
