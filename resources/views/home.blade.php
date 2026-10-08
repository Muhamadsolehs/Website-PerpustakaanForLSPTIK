@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <p>Total Buku: <strong>{{ $total }}</strong></p>

    <h2>5 Buku Terakhir</h2>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Judul</th>
                <th>Tanggal Input</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recent as $buku)
                <tr>
                    <td>{{ $buku['kode'] }}</td>
                    <td>{{ $buku['judul'] }}</td>
                    <td>{{ $buku['tanggal'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection