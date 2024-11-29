@extends('layouts.app')

@section('contents')
<div class="container mt-4">
    <h2>Input Data Peminjaman Praktikum</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_alat" class="form-label">Nama Alat</label>
            <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Masukkan nama alat" required>
        </div>
        <div class="mb-3">
            <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" placeholder="Masukkan nama peminjam" required>
        </div>
        <div class="mb-3">
            <label for="spesifikasi" class="form-label">Spesifikasi</label>
            <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" placeholder="Masukkan spesifikasi alat" required>
        </div>
        <div class="mb-3">
            <label for="no_iventaris" class="form-label">Nomor Inventaris</label>
            <input type="text" class="form-control" id="no_iventaris" name="no_iventaris" placeholder="Masukkan nomor inventaris" required>
        </div>
        <div class="mb-3">
            <label for="nama_laboran" class="form-label">Nama Laboran</label>
            <input type="text" class="form-control" id="nama_laboran" name="nama_laboran" placeholder="Masukkan nama laboran" required>
        </div>
        <div class="mb-3">
            <label for="nama_praktikum" class="form-label">Nama Praktik</label>
            <input type="text" class="form-control" id="nama_praktikum" name="nama_praktikum" placeholder="Masukkan nama praktikum" required>
        </div>
        
        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah" required>
        </div>
        <div class="mb-3">
            <label for="keadaan" class="form-label">Keadaan</label>
            <select class="form-control" id="keadaan" name="keadaan" required>
                <option value="" disabled selected>Pilih keadaan</option>
                <option value="baik">Baik</option>
                <option value="rusak">Rusak</option>
            </select>
        </div>        
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
