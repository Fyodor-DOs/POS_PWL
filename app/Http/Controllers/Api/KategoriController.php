<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = KategoriModel::with('barang')->get();

        return response()->json([
            'status_code' => 200,
            'data' => $kategoris
        ]);
    }

    public function store(Request $request)
    {
        $kategori = KategoriModel::create([
            'kategori_code' => $request->kategori_code,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return response()->json([
            'status_code' => 201,
            'data' => $kategori
        ]);
    }

    public function show(KategoriModel $kategori)
    {
        $kategori->load('barang');

        return response()->json([
            'status_code' => 200,
            'data' => $kategori
        ]);
    }

    public function update(Request $request, KategoriModel $kategori)
    {
        $kategori->update([
            'kategori_code' => $request->kategori_code,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return response()->json([
            'status_code' => 200,
            'data' => $kategori
        ]);
    }

    public function destroy(KategoriModel $kategori)
    {
        $kategori->delete();

        return response()->json([
            'status_code' => 204,
            'success' => true,
            'message' => 'Kategori terhapus',
        ]);
    }
}
