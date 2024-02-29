<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index()
    {
        $title = "Pengembalian";
        return view('peminjaman/index', compact('title'));
    }
}
