<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Jadwal;
use App\Models\Member;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function generate($jadwal)
    {
        // Ambil semua data dari TabelA
        $member = Member::all();

        $judul = "Data Absensi";

        $jadwal = Jadwal::where('status', '=', 0)->get();


        // Loop melalui setiap data dan simpan ke ab$absensi
        foreach ($member as $data) {
            // Buat instance model ab$absensi
            $absensi = new Absensi;

            // Setel nilai atribut model ab$absensi dengan nilai dari TabelA
            $absensi->nama = $data->nama_anak;
            $absensi->tanggal = $jadwal;
            // Tambahkan atribut lain sesuai kebutuhan

            // Simpan data ke ab$absensi
            $absensi->save();
        }

        return "Absensi berhasil dibuat";
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = "Data Absensi";
        $jadwal = Jadwal::where('status', '=', 0)->get();
        
        return view('admin.absensi.index', compact('judul', 'jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judul = "Tambah Absensi";

        $jadwal = Jadwal::where('status', '=', 0)->get();

        $absensi = Absensi::all();

        return view('admin.absensi.create', compact('judul', 'jadwal', 'absensi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
        ], [
            'tanggal.required' => 'tanggal wajib diisi',
        ]);


        // Ambil semua data dari TabelA
        $member = Member::all();


        // Loop melalui setiap data dan simpan ke ab$absensi
        foreach ($member as $data) {
            // Buat instance model ab$absensi
            
            $data = [
            'nama' => $data->nama_anak,
            'tanggal' => $request->input('tanggal'),
        ];

            Absensi::create($data);

        }

        return redirect('/admin/jadwal');

    }

    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
}
