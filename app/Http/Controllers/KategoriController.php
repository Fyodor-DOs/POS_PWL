<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Services\ViewString;
use App\DataTables\KategoriDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriModel;
use PhpParser\Node\Stmt\Return_;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_code' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }
}
