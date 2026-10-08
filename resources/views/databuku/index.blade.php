@extends('layout.app')

@section('title', 'Data Buku')

@section('content')
    <h1>Data Buku</h1>

    <button class="btn btn-primary" onclick="openModal('modalCreate')">+ Tambah Buku</button>
    <a href="{{ route('buku.cetak') }}" class="btn btn-warning">🖨 Cetak PDF</a>

    <div id="alertBox" class="alert"></div>

    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $buku)
                <tr>
                    <td>{{ $buku['kode'] }}</td>
                    <td>{{ $buku['judul'] }}</td>
                    <td>{{ $buku['kategori'] }}</td>
                    <td>{{ $buku['penulis'] }}</td>
                    <td>
                        <button class="btn btn-primary"
                            onclick="fillEditModal(@json($buku)); openModal('modalEdit')">Edit</button>
                        <form action="{{ route('buku.destroy') }}" method="POST" style="display:inline;">
                            @csrf
                            <input type="hidden" name="kode" value="{{ $buku['kode'] }}">
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('databuku.modal')
@endsection