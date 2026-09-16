@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <p><a href="{{ route('books.index') }}">← Kembali ke daftar</a></p>

    <h1>Tambah Buku</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <p>
            <label>Judul</label><br>
            <input type="text" name="judul" value="{{ old('judul') }}">
            @error('judul')
                <br><span style="color: #dc2626;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Penulis</label><br>
            <input type="text" name="penulis" value="{{ old('penulis') }}">
            @error('penulis')
                <br><span style="color: #dc2626;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Penerbit</label><br>
            <input type="text" name="penerbit" value="{{ old('penerbit') }}">
            @error('penerbit')
                <br><span style="color: #dc2626;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Tahun Terbit</label><br>
            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
            @error('tahun_terbit')
                <br><span style="color: #dc2626;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Stok</label><br>
            <input type="number" name="stok" value="{{ old('stok') }}">
            @error('stok')
                <br><span style="color: #dc2626;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Kategori</label><br>
            <input type="text" name="kategori" value="{{ old('kategori') }}">
            @error('kategori')
                <br><span style="color: #dc2626;">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit" class="btn">Simpan</button>
    </form>
@endsection