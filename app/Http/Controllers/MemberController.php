<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::oldest()->get();

        return view('admin.member.index', [
            'judul' => 'Daftar Member',
            'data' => $members,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member.create', [
            'judul' => 'Tambah Member',
        ]);
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
            'level' => 'required',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ], [
            'nama_anak.required' => 'Nama anak harus diisi',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'nama_ortu.required' => 'Nama orang tua harus diisi',
            'wa_ortu.required' => 'Nomor wa orang tua harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'level.required' => 'Level harus diisi',
            'foto.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
        ]);

        $data = $request->all();

        if ($image = $request->file('foto')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['foto'] = $profileImage;
        }

        $data['umur'] = $this->hitungUmur($data['tanggal_lahir']);

        Member::create($data);

        Alert::success('Data Member', 'Berhasil ditambahkan!');
        return redirect('/admin/member');
    }

    private function hitungUmur($tanggal_lahir)
    {
        $tanggal_lahir = new DateTime($tanggal_lahir);
        $tanggal_sekarang = new DateTime();
        $perbedaan = $tanggal_sekarang->diff($tanggal_lahir);
        return $perbedaan->y; // Mengembalikan umur dalam tahun
    }

    /**
     * Display the specified resource.
     */
    public function show($id_member)
    {
        $member = Member::where('id_member', $id_member)->first();
        return view('member.detail', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('admin.member.edit', [
            'judul' => 'Edit Member',
            'data' => $member,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'nama_anak' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ortu' => 'required',
            'wa_ortu' => 'required',
            'alamat' => 'required',
            'level' => 'required',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ], [
            'nama_anak.required' => 'Nama anak harus diisi',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'nama_ortu.required' => 'Nama orang tua harus diisi',
            'wa_ortu.required' => 'Nomor wa orang tua harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'level.required' => 'Level harus diisi',
            'foto.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
        ]);

        $input = $request->all();

        if ($image = $request->file('foto')) {
            // Hapus file lama
            $path = 'images/';
            if ($member->foto != '' && $member->foto != null) {
                $file_old = $path . $member->foto;
                if (File::exists($file_old)) {
                    File::delete($file_old);
                }
            }

            // Upload file baru
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = $profileImage;
        } else {
            unset($input['foto']);
        }

        $member->update($input);

        Alert::success('Data Member', 'Berhasil diubah!');
        return redirect('/admin/member');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        if ($member->foto) {
            $file_path = public_path('images/' . $member->foto);
            if (File::exists($file_path)) {
                File::delete($file_path);
            }
        }
        $member->delete();

        Alert::success('Data Member', 'Berhasil dihapus!');
        return redirect('/admin/member');
    }
}
