<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;


class JadwalMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::oldest()->get();

        $title_alert = 'Hapus Data!';
        $text_alert = "Apakah anda yakin ingin menghapus data ini ??";
        confirmDelete($title_alert, $text_alert);

        return view(
            'member.jadwalmember.index',
            [
                'data' => $jadwal,

            ]
        );
    }
   
}