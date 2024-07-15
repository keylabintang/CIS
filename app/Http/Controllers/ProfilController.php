<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan user yang sedang login
        $user = $request->user();

        // Memastikan user memiliki relasi dengan Member
        if ($user->member) {
            // Mengambil data member yang terkait dengan user yang sedang login
            $member = $user->member;

            return view('member.profil.index', [
                'judul' => 'Profil Member',
                'data' => [$member], // Menggunakan array untuk kompatibilitas dengan foreach di view
            ]);
        }

        // Jika user tidak terkait dengan member, bisa melakukan penanganan sesuai kebutuhan aplikasi
        abort(403, 'User tidak terkait dengan member.');
    }
}
