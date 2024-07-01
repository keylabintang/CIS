<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
                'foto' => 'required',
                'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'keterangan.required' => 'Keterangan harus diisi',
                'foto.required' => 'Foto harus diisi',
                'foto.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
            ]
        );

        $data = $request->all();

        if ($request->hasFile("foto")) {

            $image = $request->file("foto");
            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data["foto"] = "$profileImage";
        }

        Prestasi::create($data);

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
                'foto' => 'required',
                'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'keterangan.required' => 'Keterangan harus diisi',
                'foto.required' => 'Foto harus diisi',
                'foto.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
            ]
        );

        $data = $request->all();

        if ($request->hasFile("foto")) {
            File::delete('images/' . $prestasi->foto);

            $image = $request->file("foto");
            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data["foto"] = "$profileImage";
        } else {
            unset($data["foto"]);
        }

        $prestasi->update($data);

        Alert::success('Data Prestasi', 'Berhasil Diubah!');
        return redirect('/admin/prestasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        File::delete('images/' . $prestasi->foto);
        $prestasi->delete();

        Alert::success('Data Prestasi', 'Berhasil dihapus!');
        return redirect('/admin/prestasi');
    }
}
