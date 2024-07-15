<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistrasiController extends Controller
{

    public function index()
    {
        $user = User::oldest()->get();
        return view(
            'admin.registrasi.index',
            [
                'data' => $user,
                'judul' => 'Daftar User'
            ]
        );
    }


    public function create()
    {
        $judul = "Tambah Data User";

        $user = User::all();

        return view('admin.registrasi.create', compact('judul', 'user'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_as' => 'required',
        ], [
            'name.required' => 'name wajib diisi',
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi',
            'role_as.required' => 'role_as wajib diisi',
        ]);


        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password),
            'role_as' => $request->input('role_as'),
        ];

        User::create($data);

        Alert::success('Data User', 'Berhasil ditambahkan!');
        return redirect('/admin/registrasi');
    }

    public function show(User $registrasi)
    {
        //
    }

    public function edit(User $registrasi)
    {
        return view(
            'admin.registrasi.edit',
            [
                'judul' => 'Edit registrasi',
                'registrasi' => $registrasi
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $registrasi)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'name wajib diisi',
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);


        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password),
        ];

        $registrasi->update($data);

        Alert::success('Data User', 'Berhasil diubah!');
        return redirect('/admin/registrasi');
    }

    public function destroy(User $registrasi)
    {
        $registrasi->delete();

        Alert::success('Data User', 'Berhasil dihapus!!');
        return redirect('/admin/registrasi');
    }
}
