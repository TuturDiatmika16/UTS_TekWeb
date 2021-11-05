<?php

namespace App\Http\Controllers;

use App\Models\lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $lokasi = lokasi::all();
        return view('admin.lokasi', [
            'lokasi' => $lokasi
        ]);
    }

    public function tambahLokasi(Request $request)
    {
        lokasi::create([
            'nm_lokasi' => $request->lokasi
        ]);
        return redirect('lokasi');
    }
}
