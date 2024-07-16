<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $program = Program::oldest()->get();

        $title_alert = 'Hapus Data!';
        $text_alert = "Apakah anda yakin ingin menghapus data ini ??";
        confirmDelete($title_alert, $text_alert);

        return view(
            'admin.program.index',
            [
                'judul' => 'Daftar Program',
                'data' => $program,

            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.program.create',
            [
                'judul' => 'Tambah Program'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
        ], [
            'nama.required' => 'Nama Program wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'waktu.required' => 'Waktu wajib diisi',
            'tempat.required' => 'Tempat wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi',
        ]);


        $data = [
            'nama' => $request->input('nama'),
            'tanggal' => $request->input('tanggal'),
            'waktu' => $request->input('waktu'),
            'tempat' => $request->input('tempat'),
            'keterangan' => $request->input('keterangan'),
        ];

        Program::create($data);

        Alert::success('Data Program', 'Berhasil ditambahkan!');
        return redirect('/admin/program');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return view(
            'admin.program.edit',
            [
                'judul' => 'Edit Program',
                'program' => $program,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
        ], [
            'nama.required' => 'Nama Program wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'waktu.required' => 'Waktu wajib diisi',
            'tempat.required' => 'Tempat wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi',
        ]);


        $data = [
            'nama' => $request->input('nama'),
            'tanggal' => $request->input('tanggal'),
            'waktu' => $request->input('waktu'),
            'tempat' => $request->input('tempat'),
            'keterangan' => $request->input('keterangan'),
        ];

        $program->update($data);

        Alert::success('Data Program', 'Berhasil diubah!');
        return redirect('/admin/program');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $program->delete();
        Alert::success('Data Program', 'Berhasil dihapus!!');
        return redirect('/admin/program');
    }
}