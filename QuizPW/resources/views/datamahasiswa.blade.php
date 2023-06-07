<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataMahasiswa</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<body>
<h2>Data Mahasiswa</h2>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @php
            $mahasiswa = [
                ['nama' => 'Aditya ', 'npm' => '212310011', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Putra', 'npm' => '212310049', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Salsa', 'npm' => '212310014', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Katarina', 'npm' => '212310008', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Daniel', 'npm' => '212310068', 'kelas' => 'TI-21-PA'],

                
                ];
        @endphp
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['npm'] }}</td>
            <td>{{ $mhs['kelas'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    </body>
@endsection
</body>
</html>