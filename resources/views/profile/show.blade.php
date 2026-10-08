@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
    <h1>Profil Pengguna</h1>

    <table>
        <tr>
            <th style="width: 200px; text-align: left; background: #f3f4f6;">Nama</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th style="text-align: left; background: #f3f4f6;">Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th style="text-align: left; background: #f3f4f6;">Role</th>
            <td>{{ ucfirst($user->role) }}</td>
        </tr>
    </table>

    <h2 style="margin-top: 40px;">Ganti Password</h2>

    <form action="{{ route('profil.password') }}" method="POST" style="max-width: 400px;">
        @csrf

        <div style="margin-bottom: 16px;">
            <label for="password_lama" style="display: block; font-weight: bold; margin-bottom: 4px;">Password Lama</label>
            <input type="password" name="password_lama" id="password_lama" style="width: 100%; padding: 8px;">
            @error('password_lama')
                <div style="color: #b91c1c; font-size: 14px; margin-top: 4px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 16px;">
            <label for="password_baru" style="display: block; font-weight: bold; margin-bottom: 4px;">Password Baru</label>
            <input type="password" name="password_baru" id="password_baru" style="width: 100%; padding: 8px;">
            @error('password_baru')
                <div style="color: #b91c1c; font-size: 14px; margin-top: 4px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 16px;">
            <label for="password_baru_confirmation" style="display: block; font-weight: bold; margin-bottom: 4px;">Konfirmasi Password Baru</label>
            <input type="password" name="password_baru_confirmation" id="password_baru_confirmation" style="width: 100%; padding: 8px;">
        </div>

        <button type="submit" class="btn">Simpan Password</button>
    </form>
@endsection
