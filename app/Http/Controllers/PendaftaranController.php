<?php
// app/Http/Controllers/PendaftaranController.php
namespace App\Http\Controllers;

use App\Models\Member;
use DateTime;
use Carbon\Carbon;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::oldest()->get();
    }

    public function create()
    {
        //
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
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'level' => 'required',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
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

        Pendaftaran::create($data);

        return redirect('home')->with('Success', 'Pendaftaran berhasil!');
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
            $pendaftaran->status = 2;
            $pendaftaran->update();

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

            return back()->with('success', 'Pendaftaran diterima.');
        } else {
            return back()->with('error', 'Status tidak valid.');
        }
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
