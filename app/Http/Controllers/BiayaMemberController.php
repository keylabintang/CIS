<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class BiayaMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Mendapatkan id_member dari pengguna yang sedang login
        $id_member = Auth::id();

        // Mengambil laporan hanya untuk member yang sedang login
        $biaya = Biaya::where('id_member', $id_member)->oldest()->get();

        return view(
            'member.biayamember.index',
            [
                'judul' => 'Input Pembayaran',
                'judul2' => 'Riwayat Pembayaran',
                'data' => $biaya,
            ]
        );
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
            'id_member.required' => 'Nama wajib diisi',
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
            $input["bukti"] = "$profileImage";
        }

        Biaya::create($input);

        Alert::success('Data Biaya', 'Berhasil Ditambahkan!');
        return redirect('/member/biayamember');
    }
}
