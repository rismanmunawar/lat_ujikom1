<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $title = "Anggota";
        $anggotas = AnggotaModel::All();
        return view('anggota/index', compact('anggotas', 'title'));
    }

    public function create()
    {
        $title = "Anggota";
        return view('anggota/create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_anggota' => 'required|unique:anggotas',
            'nm_anggota' => 'required',
            'jk' => 'required',
            'tp_lahir' => 'required',
            'tg_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jns_anggota' => 'required',
            'jml_pjm' => 'required|in:admin,anggota',
        ]);

        AnggotaModel::create($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota created successfully.');
    }

    public function edit(AnggotaModel $anggota)
    {
        $title = "Edit";
        return view('anggota.edit', compact('anggota', 'title'));
    }

    public function update(Request $request, AnggotaModel $anggota)
    {
        $title = "Pengembalian";
        $request->validate([
            'kd_anggota' => 'required|unique:anggotas,kd_anggota,' . $anggota->id,
            'nm_anggota' => 'required',
            'jk' => 'required',
            'tp_lahir' => 'required',
            'tg_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jns_anggota' => 'required',
        ]);


        $anggota->kd_anggota = $request->kd_anggota;
        $anggota->nm_anggota = $request->nm_anggota;
        $anggota->jk = $request->jk;
        $anggota->tp_lahir = $request->tp_lahir;
        $anggota->tg_lahir = $request->tg_lahir;
        $anggota->alamat = $request->alamat;
        $anggota->no_hp = $request->no_hp;
        $anggota->jns_anggota = $request->jns_anggota;

        $anggota->save();

        return redirect()->route('users.index')->withSuccess('Great! You have Successfully updated');
    }
    public function destroy(AnggotaModel $anggota)
    {
        $anggota->delete();
        return redirect()->route('anggota.index')->with('success', 'anggota has been deleted successfully');
    }
}
