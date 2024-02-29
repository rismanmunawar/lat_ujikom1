<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KembaliController extends Controller
{
    public function index()
    {
        $title = "Pengembalian";
        return view('pengembalian/index', compact('title'));
    }
}
