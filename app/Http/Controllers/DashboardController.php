<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    private $file = 'data/buku.json';

    public function index()
    {
        if (!Storage::exists($this->file)) {
            Storage::put($this->file, json_encode([]));
        }

        $buku = json_decode(Storage::get($this->file), true);

        $totalBuku = count($buku);

        // Hitung buku bulan ini
        $bulanIni = date('Y-m');
        $bukuBulanIni = collect($buku)->filter(function ($item) use ($bulanIni) {
            return substr($item['tanggal'], 0, 7) == $bulanIni;
        })->count();

        // Ambil 5 riwayat terakhir
        $riwayat = collect($buku)->sortByDesc('tanggal')->take(5);

        return view('dashboard', compact('totalBuku', 'bukuBulanIni', 'riwayat'));
    }
}
