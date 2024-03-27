<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{

    // DB::insert('insert into m_level(level_code, level_nama, created_at) values(?,?,?)', ['CUS', 'Pelanggan', now()]);
    // return 'insert data baru berhasil';

    // $row = DB::update('update m_level set level_nama = ? where level_code = ?', ['Customer', 'CUS']);
    // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

    // $row = DB::delete('delete from m_level where level_code = ?', ['CUS']);
    // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

    // $data = DB::select('select * from m_level');
    // return view('level', ['data' => $data]);
    public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.index');
    }

    public function create(): View
    {
        return view('level.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate();
        $validated = $request->safe()->only(['level_id', 'level_code', 'level_nama']);
        $validated = $request->safe()->except(['level_id', 'level_code', 'level_nama']);

        return redirect('/user');
    }
}
