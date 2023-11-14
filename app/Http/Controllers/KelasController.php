<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class KelasController extends Controller
{
    public function index()
    {
        $post = Kelas::all();

        return view('kelas.index', compact('post'));
    }

    // public function create()
    // {
    //     $role = ['admin', 'petugas', 'masyarakat'];
    //     return view('admin.akun.create', compact('role'));
    // }

    // public function store(Request $request): RedirectResponse
    // {
    //     //validate form
    //     $this->validate($request, [
    //         'name'          => 'required|min:1',
    //         'email'         => 'required|min:5',
    //         'password'      => 'required|min:5',
    //         'role'          => 'required',
    //     ]);

    //     //create post
    //     User::create([
    //         'name'          => $request->name,
    //         'email'         => $request->email,
    //         'password'      => bcrypt($request->password),
    //         'role'          => $request->role,

    //     ]);

    //     //redirect to index
    //     return redirect()->route('akun.index')->with(['success' => 'Data Berhasil Disimpan!']);
    // }
}
