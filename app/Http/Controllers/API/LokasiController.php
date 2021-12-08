<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\LokasiResource;
use App\Models\lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        return LokasiResource::collection(lokasi::all()); // jika banyak data
        // return new LokasiResource(lokasi::first()); jika satu data
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nm_lokasi' => 'required',
        ]);
        $lokasi = lokasi::create([
            'nm_lokasi' => $request->nm_lokasi,
        ]);

        $response = [
            'message' => 'Data Berhasil Ditambahkan',
            'data' => new LokasiResource($lokasi),
        ];

        return response()->json($response, 201);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $lokasi = lokasi::findOrFail($id);
        $this->validate($request, [
            'nm_lokasi' => 'required',
        ]);

        try {
            $lokasi->update([
                'nm_lokasi' => $request->nm_lokasi,
            ]);
            return response()->json(['message' => 'Data Berhasil Diperbarui'], 200);
        } catch (\Throwable $th) {
            return response([
                'message' => 'Error ' . $th,
            ]);
        }
    }

    public function destroy($id)
    {
        $lokasi = lokasi::findOrFail($id);

        try {
            $lokasi->delete();
            return response()->json(['message' => 'Data Berhasil Dihapus'], 200);
        } catch (\Throwable $th) {
            return response([
                'message' => 'Error ' . $th,
            ]);
        }
    }
}
