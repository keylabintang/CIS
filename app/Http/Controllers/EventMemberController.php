<?php

namespace App\Http\Controllers;

use App\Models\Event;


class EventMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::oldest()->get();

        $title_alert = 'Hapus Data!';
        $text_alert = "Apakah anda yakin ingin menghapus data ini ??";
        confirmDelete($title_alert, $text_alert);

        return view(
            'member.eventmember.index',
            [
                'judul' => 'Coming Soon Event 2024',
                'data' => $event,

            ]
        );
    }
   
}