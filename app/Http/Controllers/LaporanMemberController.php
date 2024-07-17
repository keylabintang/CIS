<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanMemberController extends Controller
{
    public function index()
    {
        $laporan = Laporan::oldest()->get();

        // Hapus baris berikut karena tidak valid
        // $title_alert = 'Hapus Data!';
        // $text_alert = "Apakah anda yakin ingin menghapus data ini ??";
        // confirmDelete($title_alert, $text_alert);

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
