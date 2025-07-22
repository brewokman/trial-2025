@extends('layouts.app')

@section('content')
<h2>Tambah Mahasiswa</h2>

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    <label>Nama:</label>
    <input type="text" name="nama"><br>
    <label>NIM:</label>
    <input type="text" name="nim"><br>
    <label>Email:</label>
    <input type="email" name="email"><br>
    <label>Jurusan:</label>
    <input type="text" name="jurusan"><br>
    <button type="submit">Simpan</button>
</form>
@endsection
