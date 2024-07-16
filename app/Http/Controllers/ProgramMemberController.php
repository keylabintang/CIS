<?php

namespace App\Http\Controllers;

use App\Models\Program;


class ProgramMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $program = Program::oldest()->get();

        $title_alert = 'Hapus Data!';
        $text_alert = "Apakah anda yakin ingin menghapus data ini ??";
        confirmDelete($title_alert, $text_alert);

        return view(
            'member.programmember.index',
            [
                'judul' => 'Program Club 2024',
                'data' => $program,

            ]
        );
    }
   
}