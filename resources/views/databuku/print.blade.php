<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Cetak Data Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background: #f0f0f0;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body onload="window.print()">
    <h2>📚 Data Buku Perpustakaan</h2>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Judul</th>
                <th>ISBN</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buku as $item)
                <tr>
                    <td>{{ $item['kode'] }}</td>
                    <td>{{ $item['judul'] }}</td>
                    <td>{{ $item['isbn'] }}</td>
                    <td>{{ $item['kategori'] }}</td>
                    <td>{{ $item['lokasi'] }}</td>
                    <td>{{ $item['penulis'] }}</td>
                    <td>{{ $item['penerbit'] }}</td>
                    <td>{{ $item['tahun'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>