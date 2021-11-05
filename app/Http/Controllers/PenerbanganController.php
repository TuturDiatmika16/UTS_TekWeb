<?php

namespace App\Http\Controllers;

use App\Models\lokasi;
use App\Models\penerbangan;
use Illuminate\Http\Request;

class PenerbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = lokasi::all();
        return view('user.beranda', [
            'lokasi' => $lokasi,
        ]);
    }
    public function showData()
    {

        $penerbangan = penerbangan::all();

        return view('admin.penerbangan', [
            'penerbangan' => $penerbangan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'asal' => ['required'],
            'tujuan' => ['required'],
            'tanggal_keberangkatan' => ['required', 'date'],
            'tanggal_pulang' => ['date'],
        ]);

        $jumlahPenumpang = $request->remaja + $request->dewasa + $request->anak;
        penerbangan::create([
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'tanggal_keberangkatan' => $request->tanggal_keberangkatan,
            'tanggal_pulang' => $request->tanggal_pulang,
            'jumlah_penumpang' => $jumlahPenumpang,
        ]);

        echo "Berhasil";
        // gunakan salah satu redirect atau back
        //return redirect() // ini isinya url bukan namenya
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
