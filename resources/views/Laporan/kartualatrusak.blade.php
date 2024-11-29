@extends('layouts.app')

@section('contents')
<div class="container mt-4">
    <h2>Input Kartu Alat Rusak</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('laporan.kartuAlatRusak') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_alat" class="form-label">Nama Alat</label>
            <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Masukkan nama alat" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="no_iventaris" class="form-label">No Iventaris</label>
            <input type="text" class="form-control" id="no_iventaris" name="no_iventaris" placeholder="masukan no iventaris" required>
        </div>
        <div class="mb-3">
            <label for="kerusakan" class="form-label">Kerusakan</label>
            <input type="text" class="form-control" id="kerusakan" name="kerusakan" placeholder="masukan kerusakan" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan keterangan kerusakan" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
