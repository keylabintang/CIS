<?php

namespace App\Http\Controllers;

use App\Models\Member;
use DateTime;
use Carbon\Carbon;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::oldest()->get();

        $title_alert = 'Hapus Data!';
        $text_alert = "Apakah anda yakin ingin menghapus data ini ??";
        confirmDelete($title_alert, $text_alert);

        return view(
            'admin.pendaftaran.index',
            [
                'data' => $pendaftaran,
                'judul' => 'Daftar Pendaftaran'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_anak' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ortu' => 'required',
            'wa_ortu' => 'required',
            'alamat' => 'required',
            'bukti_pembayaran' => 'required',
            'bukti_pembayaran.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
        ], [
            'nama_anak.required' => 'Nama anak harus diisi',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'sekolah.required' => 'Sekolah harus diisi',
            'nama_ortu.required' => 'Nama orang tua harus diisi',
            'wa_ortu.required' => 'Nomor wa orang tua harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'bukti_pembayaran.required' => 'Bukti pembayaran harus diisi',
            'bukti_pembayaran.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
        ]);

        $data = $request->all();

        $data['umur'] = $this->hitungUmur($data['tanggal_lahir']);

        if ($request->hasFile("bukti_pembayaran")) {

            $image = $request->file("bukti_pembayaran");
            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data["bukti_pembayaran"] = "$profileImage";
        }

        // var_dump($data['umur']);

        Pendaftaran::create($data);

        return back();
    }

    private function hitungUmur($tanggal_lahir)
    {
        $tanggal_lahir = new DateTime($tanggal_lahir);
        $tanggal_sekarang = new DateTime();
        $perbedaan = $tanggal_sekarang->diff($tanggal_lahir);
        return $perbedaan->y; // Mengembalikan umur dalam tahun
    }

    public function receive(Pendaftaran $pendaftaran)
    {
        // cek status Waiting
        if ($pendaftaran->status == 1) {

            // ubah status jadi Receive
            $pendaftaran->status = 2;
            $pendaftaran->update();

            // tambahkan data pendaftaran ke tabel member
            $member = new Member;
            $member->nama_anak = $pendaftaran->nama_anak;
            $member->jenis_kelamin = $pendaftaran->jenis_kelamin;
            $member->tanggal_lahir = $pendaftaran->tanggal_lahir;
            $member->umur = $pendaftaran->umur;
            $member->ig_anak = $pendaftaran->ig_anak;
            $member->nama_ortu = $pendaftaran->nama_ortu;
            $member->wa_ortu = $pendaftaran->wa_ortu;
            $member->ig_ortu = $pendaftaran->ig_ortu;
            $member->alamat = $pendaftaran->alamat;
            $member->asal_sekolah = $pendaftaran->asal_sekolah;
            $member->level = $pendaftaran->level;
            $member->save();

            return back();
        } else {
            return back();
        }
    }

    public function reject(Pendaftaran $pendaftaran)
    {
        // cek status Waiting
        if ($pendaftaran->status == 1) {
            $pendaftaran->status = 3;
            $pendaftaran->update();
            return back();
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();

        // Alert::success('Data Pelatih', 'Berhasil dihapus!');
        return redirect('/admin/pendaftaran');
    }
}
