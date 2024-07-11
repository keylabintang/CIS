<?php
// app/Http/Controllers/PendaftaranController.php
namespace App\Http\Controllers;

use App\Models\Member;
use DateTime;
use Carbon\Carbon;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranMemberController extends Controller
{

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

        return redirect()->route('home')->with('success', 'Pendaftaran berhasil!');
    }

    private function hitungUmur($tanggal_lahir)
    {
        $tanggal_lahir = new DateTime($tanggal_lahir);
        $tanggal_sekarang = new DateTime();
        $perbedaan = $tanggal_sekarang->diff($tanggal_lahir);
        return $perbedaan->y;
    }
}
