@extends('layouts.app')

@section('content')
<h2>Detail Mahasiswa</h2>
<p>Nama: {{ $mahasiswa->nama }}</p>
<p>NIM: {{ $mahasiswa->nim }}</p>
<p>Email: {{ $mahasiswa->email }}</p>
<p>Jurusan: {{ $mahasiswa->jurusan }}</p>
<a href="{{ route('mahasiswa.index') }}">Kembali</a>
@endsection
