<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class BukuController extends Controller
{
    private $file = 'buku.json';

    private function readData()
    {
        if (!Storage::exists($this->file)) {
            Storage::put($this->file, json_encode([]));
        }
        return json_decode(Storage::get($this->file), true);
    }

    private function writeData($data)
    {
        Storage::put($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function dashboard()
    {
        $data = $this->readData();
        $total = count($data);
        $recent = array_slice(array_reverse($data), 0, 5);
        return view('home', compact('total', 'recent'));
    }

    public function index()
    {
        $data = $this->readData();
        return view('databuku.index', compact('data'));
    }

    public function create()
    {
        return view('databuku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|min:3',
            'judul' => 'required',
            'isbn' => 'required|numeric',
            'kategori' => 'required',
            'lokasi' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required|numeric',
        ]);

        $data = $this->readData();

        foreach ($data as $buku) {
            if ($buku['kode'] === $request->kode) {
                return back()->withErrors(['kode' => 'Kode buku sudah ada!']);
            }
        }

        $data[] = [
            'kode' => $request->kode,
            'judul' => $request->judul,
            'isbn' => $request->isbn,
            'kategori' => $request->kategori,
            'lokasi' => $request->lokasi,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun,
            'tanggal' => now()->format('Y-m-d H:i:s'),
        ];

        $this->writeData($data);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function edit($kode)
    {
        $data = $this->readData();
        $buku = collect($data)->firstWhere('kode', $kode);
        return view('databuku.edit', compact('buku'));
    }

    public function update(Request $request)
    {
        $data = $this->readData();
        foreach ($data as &$buku) {
            if ($buku['kode'] === $request->kode) {
                $buku['judul'] = $request->judul;
                $buku['isbn'] = $request->isbn;
                $buku['kategori'] = $request->kategori;
                $buku['lokasi'] = $request->lokasi;
                $buku['penulis'] = $request->penulis;
                $buku['penerbit'] = $request->penerbit;
                $buku['tahun'] = $request->tahun;
            }
        }
        $this->writeData($data);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy(Request $request)
    {
        $data = $this->readData();
        $data = array_filter($data, fn($buku) => $buku['kode'] !== $request->kode);
        $this->writeData(array_values($data));
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus!');
    }

    public function cetak()
    {
        $data = $this->readData();
        $pdf = Pdf::loadView('databuku.cetak', compact('data'));
        return $pdf->stream('data-buku.pdf');
    }
}
