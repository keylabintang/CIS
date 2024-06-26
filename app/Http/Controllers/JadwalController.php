<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::oldest()->get();

        $title_alert = 'Hapus Data!';
        $text_alert = "Apakah anda yakin ingin menghapus data ini ??";
        confirmDelete($title_alert, $text_alert);

        return view(
            'admin.jadwal.index',
            [
                'data' => $jadwal,
                'judul' => 'Daftar Jadwal'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.jadwal.create',
            [
                'judul' => 'Tambah Jadwal'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
        ], [
            'tanggal.required' => 'tanggal wajib diisi',
            'waktu.required' => 'waktu wajib diisi',
            'tempat.required' => 'tempat wajib diisi',
        ]);


        $data = [
            'tanggal' => $request->input('tanggal'),
            'waktu' => $request->input('waktu'),
            'tempat' => $request->input('tempat'),
        ];

        Jadwal::create($data);

        Alert::success('Data Jadwal', 'Berhasil ditambahkan!');
        return redirect('/admin/jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        return view(
            'admin.jadwal.edit',
            [
                'judul' => 'Edit Jadwal',
                'jadwal' => $jadwal
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
        ], [
            'tanggal.required' => 'tanggal wajib diisi',
            'waktu.required' => 'waktu wajib diisi',
            'tempat.required' => 'tempat wajib diisi',
        ]);


        $data = [
            'tanggal' => $request->input('tanggal'),
            'waktu' => $request->input('waktu'),
            'tempat' => $request->input('tempat'),
        ];

        $jadwal->update($data);

        Alert::success('Data Jadwal', 'Berhasil diubah!');
        return redirect('/admin/jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        Alert::success('Data Jadwal', 'Berhasil dihapus!!');
        return redirect('/admin/jadwal');
    }
}
