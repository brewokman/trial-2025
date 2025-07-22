@extends('layouts.app')

@section('content')
<h2>Edit Mahasiswa</h2>

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf @method('PUT')
    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br>
    <label>NIM:</label>
    <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br>
    <label>Email:</label>
    <input type="email" name="email" value="{{ $mahasiswa->email }}"><br>
    <label>Jurusan:</label>
    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"><br>
    <button type="submit">Update</button>
</form>
@endsection
