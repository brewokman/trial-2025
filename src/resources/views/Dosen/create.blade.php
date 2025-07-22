@extends('layouts.app')

@section('content')
<h2>Tambah Dosen</h2>

<form action="{{ route('dosen.store') }}" method="POST">
    @csrf
    <label>Nama:</label>
    <input type="text" name="nama"><br>
    <label>NIDN:</label>
    <input type="text" name="nidn"><br>
    <label>Email:</label>
    <input type="email" name="email"><br>
    <label>Prodi:</label>
    <input type="text" name="prodi"><br>
    <button type="submit">Simpan</button>
</form>
@endsection
