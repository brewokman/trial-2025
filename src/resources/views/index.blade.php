@extends('layouts.app') <!-- Sesuaikan dengan layout kamu -->

@section('content')
<div class="container">
    <h1>Students List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th> <!-- Ganti sesuai dengan kolom student -->
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td> <!-- Sesuaikan dengan field -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
