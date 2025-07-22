@extends('layouts.app')

@section('content')
<h2>Edit Dosen</h2>

<form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
    @csrf @method('PUT')
    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $dosen->nama }}"><br>
    <label>NIDN:</label>
    <input type="text" name="nidn" value="{{ $dosen->nidn }}"><br>
    <label>Email:</label>
    <input type="email" name="email" value="{{ $dosen->email }}"><br>
    <label>Prodi:</label>
    <input type="text" name="prodi" value="{{ $dosen->prodi }}"><br>
    <button type="submit">Update</button>
</form>
@endsection
