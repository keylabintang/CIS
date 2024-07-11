<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use App\Models\Member;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = "Data Biaya Bulanan";
        $data = Biaya::orderBy('id_biaya', 'asc')->get();



        return view('admin.biaya.index', compact('judul', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judul = "Tambah Data Biaya Bulanan";

        $biaya = Biaya::all();

        $member = Member::all();


        return view('admin.biaya.create', compact('judul', 'biaya', 'member'));
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jenis_pembayaran' => 'required',
            'keterangan' => 'required',
            'bukti.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'jenis_pembayaran.required' => 'Jenis Pembayaran wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi',
            'bukti.required' => 'Bukti wajib diisi',

        ]);

        $input = $request->all();

        if ($image = $request->file("bukti")) {
            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["bukti"] = "$profileImage";
        }

        Biaya::create($input);

        return redirect('/admin/biaya');
    }

    /**
     * Display the specified resource.
     */
    public function show(Biaya $biaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biaya $biaya)
    {
        $judul = "Edit Data Biaya Bulanan";

        return view('admin/biaya/edit', compact('biaya', 'judul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biaya $biaya)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jenis_pembayaran' => 'required',
            'keterangan' => 'required',
            'bukti' => 'required',
            'bukti.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'jenis_pembayaran.required' => 'Jenis Pembayaran wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi',
            'bukti.required' => 'Bukti wajib diisi',
            'bukti.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
        ]);

        $input = $request->all();

        $data_biaya = Biaya::find($biaya->id_biaya);

        if ($image = $request->file("bukti")) {
            // remove old file
            $path = "images/";

            if ($data_biaya->bukti != ''  && $data_biaya->bukti != null) {
                $file_old = $path . $data_biaya->bukti;
                unlink($file_old);
            }

            // upload new file
            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["bukti"] = "$profileImage";
        } else {
            unset($input["bukti"]);
        }

        $biaya->update($input);

        return redirect('/admin/biaya');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biaya $biaya)
    {
        $biaya->delete();
        Alert::success('Data Biaya', 'Berhasil dihapus!!');
        return redirect('/admin/biaya');
    }
}
