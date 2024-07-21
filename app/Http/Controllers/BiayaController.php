<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use App\Models\Member;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class BiayaController extends Controller
{
    public function index()
    {
        $member = Member::all();
        $judul = "Data Laporan Bulanan";
        $data = Biaya::orderBy('id_biaya', 'asc')->get();

        return view('admin.biaya.index', compact('judul', 'data', 'member'));
    }

    public function create()
    {
        $judul = "Tambah Data biaya Bulanan";
        $biaya = Biaya::all();
        $member = Member::all();

        return view('admin.biaya.create', compact('judul', 'biaya', 'member'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_member' => 'required',
            'tanggal' => 'required',
            'jenis_pembayaran' => 'required',
            'keterangan' => 'required',
            'bukti.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ], [
            'id_member.required' => 'id_member wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'jenis_pembayaran.required' => 'Jenis Pembayaran wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi',
            'bukti.*.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
        ]);

        $input = $request->all();

        if ($image = $request->file("bukti")) {
            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["bukti"] = $profileImage;
        }

        Biaya::create($input);

        Alert::success('Data Biaya', 'Berhasil Ditambahkan!');
        return redirect('/admin/biaya');
    }

    public function show(Biaya $biaya)
    {
        // Implementasikan jika diperlukan
    }

    public function edit(Biaya $biaya)
    {
        $judul = "Edit Data Biaya Bulanan";

        return view('admin.biaya.edit', compact('biaya', 'judul'));
    }

    public function update(Request $request, Biaya $biaya)
    {
        $request->validate([
            'id_member' => 'required',
            'tanggal' => 'required',
            'jenis_pembayaran' => 'required',
            'keterangan' => 'required',
            'bukti.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ], [
            'id_member.required' => 'Nama wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'jenis_pembayaran.required' => 'Jenis Pembayaran wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi',
            'bukti.*.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
        ]);

        $input = $request->all();

        $data_biaya = Biaya::find($biaya->id_biaya);

        if ($image = $request->file("bukti")) {
            $path = "images/";

            if ($data_biaya->bukti != '' && $data_biaya->bukti != null) {
                $file_old = $path . $data_biaya->bukti;
                if (File::exists($file_old)) {
                    File::delete($file_old);
                }
            }

            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["bukti"] = $profileImage;
        } else {
            $input["bukti"] = $data_biaya->bukti;
        }

        $biaya->update($input);

        Alert::success('Data biaya', 'Berhasil diubah!');
        return redirect('/admin/biaya');
    }

    public function destroy(Biaya $biaya)
    {
        $path = "images/";

        if ($biaya->bukti != '' && $biaya->bukti != null) {
            $file_old = $path . $biaya->bukti;
            if (File::exists($file_old)) {
                File::delete($file_old);
            }
        }

        $biaya->delete();
        Alert::success('Data Biaya', 'Berhasil Dihapus!');
        return redirect('/admin/biaya');
    }
}
