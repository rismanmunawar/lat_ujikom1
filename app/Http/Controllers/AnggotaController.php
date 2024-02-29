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
            // 'jml_pjm' => 'required|in:admin,anggota',
        ]);

        AnggotaModel::create($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota created successfully.');
    }

    public function edit($id)
    {
        $title = "Anggota";
        $anggota = AnggotaModel::find($id);
        return view('anggota.edit', compact('anggota', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kd_anggota' => 'required',
            'nm_anggota' => 'required',
            'jk' => 'required',
            'tp_lahir' => 'required',
            'tg_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jns_anggota' => 'required',
        ]);
        $anggota = AnggotaModel::find($id);
        // Update data anggota dengan data yang dikirimkan dari form
        $anggota->update($request->all());
        // Redirect kembali ke halaman yang sesuai
        return redirect()->route('anggota.index')->withSuccess('Anggota berhasil diperbarui');
    }

    public function destroy($id)
    {
        $anggota = AnggotaModel::find($id);
        $anggota->delete();
        return redirect()->route('anggota.index')->withSuccess('Anggota berhasil dihapus');
    }
}
