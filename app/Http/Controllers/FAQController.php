<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq = Faq::oldest()->get();
        return view(
            'admin.faq.index',
            [
                'data' => $faq,
                'judul' => 'Daftar FAQ'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.faq.create',
            [
                'judul' => 'Tambah FAQ'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'pertanyaan' => 'required',
                'keterangan' => 'required',
            ],
            [
                'pertanyaan.required' => 'Pertanyaan harus diisi',
                'keterangan.required' => 'Keterangan harus diisi',
            ]
        );

        Faq::create($request->all());

        Alert::success('Data FAQ', 'Berhasil Ditambahkan!');
        return redirect('/admin/faq');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view(
            'admin.faq.edit',
            [
                'judul' => 'Edit FAQ',
                'data' => $faq
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $request->validate(
            [
                'pertanyaan' => 'required',
                'keterangan' => 'required',
            ],
            [
                'pertanyaan.required' => 'Pertanyaan harus diisi',
                'keterangan.required' => 'Keterangan harus diisi',
            ]
        );

        $faq->update($request->all());

        Alert::success('Data FAQ', 'Berhasil Diubah!');
        return redirect('/admin/faq');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        Alert::success('Data FAQ', 'Berhasil dihapus!');
        return redirect('/admin/faq');
    }
}
