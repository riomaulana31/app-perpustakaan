@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
    <p><a href="{{ route('categories.index') }}">← Kembali ke daftar</a></p>

    <h1>Tambah Kategori</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <p>
            <label>Nama Kategori</label><br>
            <input type="text" name="nama_kategori" value="{{ old('nama_kategori') }}">
            @error('nama_kategori')
                <br><span style="color: #dc2626;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Deskripsi</label><br>
            <textarea name="deskripsi" rows="4" cols="40">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <br><span style="color: #dc2626;">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit" class="btn">Simpan</button>
    </form>
@endsection