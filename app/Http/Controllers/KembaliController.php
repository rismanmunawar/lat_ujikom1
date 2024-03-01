<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KembaliController extends Controller
{
    public function index()
    {
        $nm_pengguna = $this->currentUser->nm_pengguna;
        $title = "Pengembalian";
        return view('pengembalian/index', compact('title', 'nm_pengguna'));
    }
}
