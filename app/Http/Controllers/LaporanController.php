<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Member;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanController extends Controller
{
    public function index()
    {
        $member = Member::all();

        $judul = "Data Laporan Bulanan";
        $data = Laporan::orderBy('id_laporan', 'asc')->get();


        return view('admin.laporan.index', compact('judul', 'data', 'member'));
    }

    public function create()
    {
        $judul = "Tambah Data Laporan Bulanan";

        $laporan = Laporan::all();

        $member = Member::all();


        return view('admin.laporan.create', compact('judul', 'laporan', 'member'));
    }

    public function store(Request $request)
    {


        $request->validate([
            'id_member' => 'required',
            'bulan' => 'required',
            'kompetensi' => 'required',
            'catatan' => 'required',
        ], [
            'id_member.required' => 'id_member wajib diisi',
            'bulan.required' => 'bulan wajib diisi',
            'kompetensi.required' => 'kompetensi wajib diisi',
            'catatan.required' => 'catatan wajib diisi',
        ]);


        $data = [
            'id_member' => $request->input('id_member'),
            'bulan' => $request->input('bulan'),
            'kompetensi' => $request->input('kompetensi'),
            'catatan' => $request->input('catatan'),
        ];

        Laporan::create($data);

        Alert::success('Data Laporan', 'Berhasil ditambahkan!');
        return redirect('/admin/laporan');
    }

    public function edit(Laporan $laporan)
    {
        return view(
            'admin.laporan.edit',
            [
                'judul' => 'Edit Laporan',
                'laporan' => $laporan
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'id_member' => 'required',
            'bulan' => 'required',
            'kompetensi' => 'required',
            'catatan' => 'required',
        ], [
            'id_member.required' => 'id_member wajib diisi',
            'kompetensi.required' => 'kompetensi wajib diisi',
            'catatan.required' => 'catatan wajib diisi',
        ]);


        $data = [
            'id_member' => $request->input('id_member'),
            'bulan' => $request->input('bulan'),
            'kompetensi' => $request->input('kompetensi'),
            'catatan' => $request->input('catatan'),
        ];

        $laporan->update($data);

        Alert::success('Data Laporan', 'Berhasil diubah!');
        return redirect('/admin/laporan');
    }

    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        Alert::success('Data Laporan', 'Berhasil dihapus!!');
        return redirect('/admin/laporan');
    }
}
