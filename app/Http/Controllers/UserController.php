<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use App\Models\User;



class UserController extends Controller
{
    public function index()
    {
        return view('login', ['title' => 'login']);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Mengarahkan pengguna berdasarkan peran mereka
            if (Auth::user()->role == 'admin') {
                return redirect()->to('/admin');
            } elseif (Auth::user()->role == 'member') {
                return redirect()->to('/member');
            }

        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function show($id)
{
    $user = User::findOrFail($id);
    
    // Mengambil data member yang terkait dengan user
    $member = $user->member; // Menggunakan relasi yang telah didefinisikan
    
    // Sekarang Anda bisa mengakses properti dari objek $member
    // Contoh:
    $namaAnak = $member->nama_anak;
    
    // Kemudian kirim data ini ke view atau lakukan operasi lainnya
    return view('user.show', compact('user', 'member'));
}
}
