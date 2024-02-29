<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::All();
        $title = "Users";
        return view('users/index', compact('users', 'title'));
    }

    public function create()
    {
        $title = "Users";
        return view('users/create', compact('title'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nm_pengguna' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'hak_akses' => 'required|in:admin,anggota',
        ]);

        $data = $request->all();
        // dd($data);
        $check = User::create([
            'nm_pengguna' => $data['nm_pengguna'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'hak_akses' => $data['hak_akses']
        ]);

        return redirect()->route('users.index')->withSuccess('Great! You have Successfully loggedin');
    }

    public function edit(User $user)
    {
        $title = "Edit";
        return view('users.edit', compact('user', 'title'));
    }

    public function update(Request $request, User $user)
    {
        $title = "Pengembalian";
        $request->validate([
            'nm_pengguna' => 'required',
            'email' => 'required|email',
            'hak_akses' => 'required|in:admin,anggota',
            'status' => 'required|in:active,inactive',
        ]);
        $user->nm_pengguna = $request->nm_pengguna;
        $user->email = $request->email;
        $user->hak_akses = $request->hak_akses;
        $user->status = $request->status;
        if (!empty($request->password)) $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.index')->withSuccess('Great! You have Successfully updated');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'user has been deleted successfully');
    }
}
