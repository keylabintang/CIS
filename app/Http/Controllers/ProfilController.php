<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Member;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member = Member::oldest()->get();

        return view(
            'member.profil.index',
            [
                'judul' => 'Profil Member',
                'data' => $member,

            ]
        );
    }

}
