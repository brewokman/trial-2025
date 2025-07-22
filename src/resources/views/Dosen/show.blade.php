@extends('layouts.app')

@section('content')
<h2>Detail Dosen</h2>
<p>Nama: {{ $dosen->nama }}</p>
<p>NIDN: {{ $dosen->nidn }}</p>
<p>Email: {{ $dosen->email }}</p>
<p>Prodi: {{ $dosen->prodi }}</p>
<a href="{{ route('dosen.index') }}">Kembali</a>
@endsection
