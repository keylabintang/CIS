<?php

namespace App\Http\Controllers;

use App\Models\Member;
use DateTime;
use Carbon\Carbon;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranMemberController extends Controller
{

    public function index()
    {
        return view('pendaftaranMember', ['title' => 'pendaftaranMember']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_anak' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'ig_anak' => 'required',
            'nama_ortu' => 'required',
            'wa_ortu' => 'required',
            'ig_ortu' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'level' => 'required',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        $input = $request->all();

        // Hitung umur berdasarkan tanggal lahir
        $tanggal_lahir = Carbon::parse($request->tanggal_lahir);
        $umur = $tanggal_lahir->diffInYears(Carbon::now());
        $input['umur'] = $umur;

        // Upload file bukti pembayaran jika ada
        if ($image = $request->file("bukti_pembayaran")) {
            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["bukti_pembayaran"] = "$profileImage";
        }

        // Simpan data pendaftaran
        Pendaftaran::create($input);

        return redirect('/')->with('success', 'Pendaftaran sukses!');
    }

    public function show(Pendaftaran $id_pendaftaran)
    {
        $member = Member::where('id_pendaftaran', $id_pendaftaran)->first();
        return view('admin.detail', compact('member'));
    }
}
