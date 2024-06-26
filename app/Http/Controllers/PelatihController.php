<?php

namespace App\Http\Controllers;

use App\Models\Pelatih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatih = Pelatih::oldest()->get();
        return view(
            'admin.pelatih.index',
            [
                'data' => $pelatih,
                'judul' => 'Daftar Pelatih'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.pelatih.create',
            [
                'judul' => 'Tambah Pelatih'
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
                'nama_panggilan' => 'required',
                'no_wa' => 'required|numeric',
                'ig' => 'required',
                'keterangan' => 'required',
                'foto' => 'required',
                'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nama_panggilan.required' => 'Nama panggilan harus diisi',
                'no_wa.required' => 'Nomor whatsapp harus diisi',
                'no_wa.numeric' => 'Nomor whatsapp harus diisi dengan angka',
                'ig.required' => 'Akun instagram harus diisi',
                'keterangan.required' => 'Keterangan pelatih harus diisi',
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

        Pelatih::create($data);

        Alert::success('Data Pelatih', 'Berhasil Ditambahkan!');
        return redirect('/admin/pelatih');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelatih $pelatih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelatih $pelatih)
    {
        return view(
            'admin.pelatih.edit',
            [
                'judul' => 'Ubah Pelatih',
                'data' => $pelatih
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelatih $pelatih)
    {
        $request->validate(
            [
                'nama' => 'required',
                'nama_panggilan' => 'required',
                'no_wa' => 'required|numeric',
                'ig' => 'required',
                'keterangan' => 'required',
                'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nama_panggilan.required' => 'Nama panggilan harus diisi',
                'no_wa.required' => 'Nomor whatsapp harus diisi',
                'no_wa.numeric' => 'Nomor whatsapp harus diisi dengan angka',
                'ig.required' => 'Akun instagram harus diisi',
                'keterangan.required' => 'Keterangan pelatih harus diisi',
                'foto.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
            ]
        );

        $data = $request->all();

        if ($request->hasFile("foto")) {
            File::delete('images/' . $pelatih->foto);

            $image = $request->file("foto");
            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data["foto"] = "$profileImage";
        } else {
            unset($data["foto"]);
        }

        $pelatih->update($data);

        Alert::success('Data Pelatih', 'Berhasil Diubah!');
        return redirect('/admin/pelatih');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelatih $pelatih)
    {
        File::delete('images/' . $pelatih->foto);
        $pelatih->delete();

        Alert::success('Data Pelatih', 'Berhasil dihapus!');
        return redirect('/admin/pelatih');
    }
}
