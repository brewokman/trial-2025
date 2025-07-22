@extends('layouts.app')

@section('content')
<h2>Daftar Dosen</h2>
<a href="{{ route('dosen.create') }}">Tambah Dosen</a>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIDN</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dosens as $d)
        <tr>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->nidn }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->prodi }}</td>
            <td>
                <a href="{{ route('dosen.edit', $d->id) }}">Edit</a> |
                <form action="{{ route('dosen.destroy', $d->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
