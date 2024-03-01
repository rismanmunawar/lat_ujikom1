<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $nm_pengguna = $this->currentUser->nm_pengguna;
        $title = "Anggota";
        $anggotas = AnggotaModel::All();
        return view('anggota/index', compact('anggotas', 'title', 'nm_pengguna'));
    }

    // public function create()
    // {
    //     $title = "Anggota";
    //     return view('anggota/create', compact('title'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'kd_anggota' => 'required|unique:anggotas',
    //         'nm_anggota' => 'required',
    //         'jk' => 'required',
    //         'tp_lahir' => 'required',
    //         'tg_lahir' => 'required',
    //         'alamat' => 'required',
    //         'no_hp' => 'required',
    //         'jns_anggota' => 'required',
    //         // 'jml_pjm' => 'required|in:admin,anggota',
    //     ]);

    //     AnggotaModel::create($request->all());

    //     return redirect()->route('anggota.index')
    //         ->with('success', 'Anggota created successfully.');
    // }
    public function create()
    {
        $nm_pengguna = $this->currentUser->nm_pengguna;
        $title = "Anggota";
        // Dapatkan kode anggota berikutnya
        $lastKode = AnggotaModel::orderBy('kd_anggota', 'desc')->first();
        $nextKode = 'KA001'; // Default kode jika tidak ada data anggota
        // Jika ada kode sebelumnya, buat kode berikutnya
        if ($lastKode) {
            $lastNumber = intval(substr($lastKode->kd_anggota, 2)); // Ambil angka dari kode sebelumnya
            $nextNumber = $lastNumber + 1; // Tambahkan 1 ke angka tersebut
            $nextKode = 'KA' . sprintf('%03d', $nextNumber); // Format ulang kode
        }

        return view('anggota/create', compact('title', 'nextKode', 'nm_pengguna'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nm_anggota' => 'required',
            'jk' => 'required',
            'tp_lahir' => 'required',
            'tg_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jns_anggota' => 'required',
        ]);

        // Dapatkan kode anggota terakhir dari database
        $lastKode = AnggotaModel::orderBy('kd_anggota', 'desc')->first();

        // Default kode jika tidak ada data anggota
        $nextKode = 'KA001';

        // Jika ada kode sebelumnya, buat kode berikutnya
        if ($lastKode) {
            $lastNumber = intval(substr($lastKode->kd_anggota, 2)); // Ambil angka dari kode sebelumnya
            $nextNumber = $lastNumber + 1; // Tambahkan 1 ke angka tersebut
            $nextKode = 'KA' . sprintf('%03d', $nextNumber); // Format ulang kode
        }

        // Tambahkan kode anggota ke dalam data request
        $request->merge(['kd_anggota' => $nextKode]);

        // Proses penyimpanan data jika validasi berhasil
        AnggotaModel::create($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota created successfully.');
    }

    public function edit($id)
    {
        $nm_pengguna = $this->currentUser->nm_pengguna;
        $title = "Anggota";
        $anggota = AnggotaModel::find($id);
        return view('anggota.edit', compact('anggota', 'title', 'nm_pengguna'));
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
        return redirect()->route('anggota.index')->withSuccess('Anggota berhasil diperbarui');
    }

    public function destroy($id)
    {
        $anggota = AnggotaModel::find($id);
        $anggota->delete();
        return redirect()->route('anggota.index')->withSuccess('Anggota berhasil dihapus');
    }
}
