<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;




class LaporanMemberController extends Controller
{
    public function index()
    {

        // Mendapatkan id_member dari pengguna yang sedang login
        $id_member = Auth::id();

        // Mengambil laporan hanya untuk member yang sedang login
        $laporan = Laporan::where('id_member', $id_member)->oldest()->get();

        return view(
            'member.laporanmember.index',
            [
                'judul' => 'Laporan Hasil Latihan',
                'data' => $laporan,
            ]
        );
    }

    public function show($id_laporan)
    {

        $laporan = Laporan::find($id_laporan);

        if ($laporan) {
            return view('member.laporanmember.detail', compact('laporan'));
        } else {
            return redirect()->route('laporan.index')->with('error', 'Data laporan tidak ditemukan');
        }
    }
}
