<?php

namespace App\Http\Controllers;

use App\Models\Member;
use DateTime;
use Carbon\Carbon;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::oldest()->get();

        $title_alert = 'Hapus Data!';
        $text_alert = "Apakah anda yakin ingin menghapus data ini ??";
        confirmDelete($title_alert, $text_alert);

        return view('admin.pendaftaran.index', [
            'judul' => 'Daftar Pendaftaran',
            'data' => $pendaftaran,
        ]);
    }

    public function create()
    {
        //
    }

    private function hitungUmur($tanggal_lahir)
    {
        $tanggal_lahir = new DateTime($tanggal_lahir);
        $tanggal_sekarang = new DateTime();
        $perbedaan = $tanggal_sekarang->diff($tanggal_lahir);
        return $perbedaan->y;
    }

    public function receive(Pendaftaran $pendaftaran)
    {
        if ($pendaftaran->status == 1) {
            // Update status pendaftaran
            $pendaftaran->status = 2;
            $pendaftaran->save();

            // Hitung umur dari tanggal lahir
            $tanggal_lahir = new DateTime($pendaftaran->tanggal_lahir);
            $today = new DateTime();
            $umur = $today->diff($tanggal_lahir)->y;

            // Simpan data pendaftar ke dalam tabel Member
            $member = Member::create([
                'nama_anak' => $pendaftaran->nama_anak,
                'jenis_kelamin' => $pendaftaran->jenis_kelamin,
                'tanggal_lahir' => $pendaftaran->tanggal_lahir,
                'umur' => $umur, // Simpan umur yang sudah dihitung
                'ig_anak' => $pendaftaran->ig_anak,
                'nama_ortu' => $pendaftaran->nama_ortu,
                'wa_ortu' => $pendaftaran->wa_ortu,
                'ig_ortu' => $pendaftaran->ig_ortu,
                'alamat' => $pendaftaran->alamat,
                'asal_sekolah' => $pendaftaran->asal_sekolah,
                'level' => $pendaftaran->level,
                'foto' => $this->uploadFoto($pendaftaran->foto) // Panggil fungsi untuk mengupload foto
            ]);

            return back()->with('success', 'Pendaftaran diterima dan data member ditambahkan.');
        } else {
            return back()->with('error', 'Status pendaftaran tidak valid.');
        }
    }

    private function uploadFoto($foto)
    {
        if ($foto) {
            // Logika untuk menyimpan foto dan mengembalikan path atau nama file foto
            $nama_file = time() . '_' . $foto->getClientOriginalName();
            $path = $foto->storeAs('public/foto', $nama_file); // Menyimpan foto ke dalam storage

            return $path; // Mengembalikan path file foto yang disimpan
        }

        return null;
    }

    public function reject(Pendaftaran $pendaftaran)
    {
        if ($pendaftaran->status == 1) {
            $pendaftaran->status = 3;
            $pendaftaran->update();
            return back()->with('success', 'Pendaftaran ditolak.');
        } else {
            return back()->with('error', 'Status tidak valid.');
        }
    }

    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();
        return redirect('/admin/pendaftaran')->with('success', 'Data pendaftaran berhasil dihapus!');
    }
}