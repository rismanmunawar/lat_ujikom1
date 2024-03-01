<?php

namespace App\Http\Controllers;

use App\Models\PinjamModel;
use App\Models\AnggotaModel;
use App\Models\KoleksiModel;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index()
    {
        $nm_pengguna = $this->currentUser->nm_pengguna; //Ini ngambil dri basecontroller
        $title = "Pengembalian";
        $pinjams = PinjamModel::all();
        return view('peminjaman.index', compact('pinjams', 'title', 'nm_pengguna'));
    }
    public function create()
    {
        $nm_pengguna = $this->currentUser->nm_pengguna;
        $title = "Koleksi";
        $anggotas = AnggotaModel::all();
        $koleksis = KoleksiModel::all();
        $lastKode = PinjamModel::orderBy('no_transaksi_pinjam', 'desc')->first();
        $nextKode = 'TRP001';

        // Jika ada kode sebelumnya, buat kode berikutnya
        if ($lastKode) {
            $lastNumber = intval(substr($lastKode->kd_koleksi, 2));
            $nextNumber = $lastNumber + 1; // Tambahkan 1 ke angka 
            $nextKode = 'TRP' . sprintf('%03d', $nextNumber); // Format ulang kode
        }
        return view('peminjaman/create', compact('title', 'nextKode', 'anggotas', 'koleksis', 'nm_pengguna'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_transaksi_pinjam' => 'required',
            'kd_anggota' => 'required',
            'nm_anggota' => 'required',
            'tg_pinjam' => 'required',
            'tg_bts_kembali' => 'required',
            'kd_koleksi' => 'required',
            'judul' => 'required',
            'jns_bhn_pustaka' => 'required',
            'jns_koleksi' => 'required',
            'jns_media' => 'required',
        ]);

        // Dapatkan kode koleksi terakhir dari database
        $lastKode = PinjamModel::orderBy('no_transaksi_pinjam', 'desc')->first();

        // Default kode jika tidak ada data koleksi
        $nextKode = 'TRP001';

        // Jika ada kode sebelumnya, buat kode berikutnya
        if ($lastKode) {
            $lastNumber = intval(substr($lastKode->no_transaksi_pinjam, 3));
            $nextNumber = $lastNumber + 1;
            $nextKode = 'TRP' . sprintf('%03d', $nextNumber);
        }

        // Tambahkan kode koleksi ke dalam data request
        $request->merge(['no_transaksi_pinjam' => $nextKode]);

        // Proses penyimpanan data jika validasi berhasil
        PinjamModel::create($request->all());

        return redirect()->route('pinjam.index')
            ->with('success', 'Koleksi created successfully.');
    }

    public function edit($id)
    {
        $nm_pengguna = $this->currentUser->nm_pengguna;
        $title = "Koleksi";
        $pinjams = PinjamModel::find($id);
        $koleksis = KoleksiModel::all();
        $anggotas = AnggotaModel::all();
        return view('peminjaman.edit', compact('pinjams', 'anggotas', 'koleksis', 'title', 'nm_pengguna'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_transaksi_pinjam' => 'required',
            'kd_anggota' => 'required',
            'nm_anggota' => 'required',
            'tg_pinjam' => 'required',
            'tg_bts_kembali' => 'required',
            'kd_koleksi' => 'required',
            'judul' => 'required',
            'jns_bhn_pustaka' => 'required',
            'jns_koleksi' => 'required',
            'jns_media' => 'required',
        ]);
        $pinjam = PinjamModel::find($id);
        $pinjam->update($request->all());
        return redirect()->route('pinjam.index')->withSuccess('Koleksi berhasil diperbarui');
    }
    public function destroy($id)
    {
        $pinjam = PinjamModel::find($id);
        $pinjam->delete();
        return redirect()->route('pinjam.index')->withSuccess('Peminjaman berhasil dihapus');
    }
}
