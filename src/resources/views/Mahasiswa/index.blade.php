@extends('layouts.app')

@section('content')
<h2>Daftar Mahasiswa</h2>
<a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswas as $m)
        <tr>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->email }}</td>
            <td>{{ $m->jurusan }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $m->id) }}">Edit</a> |
                <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
