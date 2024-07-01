<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatih;
use App\Models\Prestasi;


class HomeController extends Controller
{

    public function index()
    {
        $pelatih = Pelatih::all();
        $prestasi = Prestasi::all();

        return view(
            'home',
            [
                'pelatih' => $pelatih,
                'prestasi' => $prestasi,
            ]
        );
    }

}
