@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Students List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>No. Telp</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->nim }}</td>
                <td>{{ $student->nama }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->jurusan }}</td>
                <td>{{ $student->no_telp }}</td>
                <td>{{ $student->alamat }}</td>
                <td>{{ $student->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
