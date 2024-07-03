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
        $judul = "Data Laporan Bulanan";
        $data = Laporan::orderBy('id_laporan', 'asc')->get();


        
        return view('admin.laporan.index', compact('judul', 'data'));
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
            'nama' => 'required',
            'bulan' => 'required',
            'kompetensi' => 'required',
            'catatan' => 'required',
        ], [
            'nama.required' => 'nama wajib diisi',
            'bulan.required' => 'bulan wajib diisi',
            'kompetensi.required' => 'kompetensi wajib diisi',
            'catatan.required' => 'catatan wajib diisi',
        ]);


        $data = [
            'nama' => $request->input('nama'),
            'bulan' => $request->input('bulan'),
            'kompetensi' => $request->input('kompetensi'),
            'catatan' => $request->input('catatan'),
        ];

        Laporan::create($data);

        Alert::success('Data Laporan', 'Berhasil ditambahkan!');
        return redirect('/admin/laporan');
    }
}
