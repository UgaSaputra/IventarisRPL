@extends('layouts.app')

@section('contents')
<div class="container mt-4">
    <h2>Input Kartu Perawatan</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('laporan.kartuPerawatan') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="alat_diperbaiki" class="form-label">Alat Diperbaiki</label>
            <input type="text" class="form-control" id="alat_diperbaiki" name="alat_diperbaiki" placeholder="Masukkan nama alat" required>
        </div>
        <div class="mb-3">
            <label for="Spesifikasi" class="form-label">Spesifikasi</label>
            <input type="text" class="form-control" id="Spesifikasi" name="Spesifikasi" placeholder="Masukkan Spesifikasi" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="masukan keterangan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
