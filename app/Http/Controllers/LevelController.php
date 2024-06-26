<?php

namespace App\Http\Controllers;

use App\DataTables\LevelDataTable;
use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LevelController extends Controller
{
    public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.index');
    }

    public function create()
    {
        return view('level.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'level_kode' => 'required',
            'level_nama' => 'required',
        ]);

        LevelModel::create([
            'level_kode' => $request->level_kode,
            'level_nama' => $request->level_nama,
        ]);

        return redirect('/level');
    }

    public function edit($id)
    {
        $level = LevelModel::find($id);
        return view('level.edit', ['data' => $level]);
    }

    public function edit_simpan($id, Request $request)
    {
        $level = LevelModel::find($id);
        $level->level_kode = $request->level_kode;
        $level->level_nama = $request->level_nama;
        $level->save();

        return redirect('/level');
    }

    public function delete($id)
    {
        $level = LevelModel::find($id);
        $level->delete();

        return redirect('/level');
    }
}
