<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasi = Prestasi::oldest()->get();
        return view(
            'admin.prestasi.index',
            [
                'data' => $prestasi,
                'judul' => 'Daftar Prestasi'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.prestasi.create',
            [
                'judul' => 'Tambah Prestasi'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'keterangan' => 'required',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'keterangan.required' => 'Keterangan harus diisi',
            ]
        );

        Prestasi::create($request->all());

        Alert::success('Data Prestasi', 'Berhasil Ditambahkan!');
        return redirect('/admin/prestasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {
        return view(
            'admin.prestasi.edit',
            [
                'judul' => 'Edit Prestasi',
                'data' => $prestasi
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $request->validate(
            [
                'nama' => 'required',
                'keterangan' => 'required',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'keterangan.required' => 'Keterangan harus diisi',
            ]
        );

        $prestasi->update($request->all());

        Alert::success('Data Prestasi', 'Berhasil Diubah!');
        return redirect('/admin/prestasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();

        Alert::success('Data Prestasi', 'Berhasil dihapus!');
        return redirect('/admin/prestasi');
    }
}
