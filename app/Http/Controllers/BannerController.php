<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::oldest()->get();
        return view(
            'admin.main-banner.index',
            [
                'data' => $banner,
                'judul' => 'Daftar Main Banner'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Banner $banner)
    {
        return view(
            'admin.main-banner.edit',
            [
                'judul' => 'Edit Main Banner',
                'data' => $banner
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate(
            [
                'span' => 'required',
                'header' => 'required',
                'paragraf' => 'required',
                'tombol' => 'required',
                'link' => 'required',
            ],
            [
                'span.required' => 'Span harus diisi',
                'header.required' => 'Header harus diisi',
                'paragraf.required' => 'Paragraf harus diisi',
                'tombol.required' => 'Tombol harus diisi',
                'link.required' => 'Link harus diisi',
            ]
        );

        $banner->update($request->all());

        Alert::success('Data Main Banner', 'Berhasil Diubah!');
        return redirect('/admin/banner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
