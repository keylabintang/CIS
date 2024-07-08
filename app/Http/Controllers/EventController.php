<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::oldest()->get();

        $title_alert = 'Hapus Data!';
        $text_alert = "Apakah anda yakin ingin menghapus data ini ??";
        confirmDelete($title_alert, $text_alert);

        return view(
            'admin.event.index',
            [
                'data' => $event,
                'judul' => 'Daftar Event'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.event.create',
            [
                'judul' => 'Tambah Event'
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
                'nama' => 'required',
                'keterangan' => 'required',
                'timeline' => 'required',
                'tempat' => 'required',
                'poster' => 'required',
                'poster.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'keterangan.required' => 'Keterangan pelatih harus diisi',
                'timeline.required' => 'Timeline harus diisi',
                'tempat.required' => 'Tempat harus diisi',
                'poster.required' => 'Poster harus diisi',
                'poster.image' => 'File poster harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
            ]
        );

        $input = $request->all();

        if ($image = $request->file("poster")) {
            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["poster"] = "$profileImage";
        }

        Event::create($input);

        Alert::success('Data Event', 'Berhasil Ditambahkan!');
        return redirect('/admin/event');
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
    public function edit(Event $event)
    {
        return view(
            'admin.event.edit',
            [
                'judul' => 'Edit Event',
                'data' => $event
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate(
            [
                'nama' => 'required',
                'keterangan' => 'required',
                'timeline' => 'required',
                'tempat' => 'required',
                'poster.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'keterangan.required' => 'Keterangan pelatih harus diisi',
                'timeline.required' => 'Timeline harus diisi',
                'tempat.required' => 'Tempat harus diisi',
                'poster.image' => 'File poster harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
            ]
        );

        $input = $request->all();

        $data_event = Event::find($event->id_event);

        if ($image = $request->file("poster")) {
            // remove old file
            $path = "images/";

            if ($data_event->poster != ''  && $data_event->poster != null) {
                $file_old = $path . $data_event->poster;
                unlink($file_old);
            }

            // upload new file
            $destinationPath = "images/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["poster"] = "$profileImage";
        } else {
            unset($input["poster"]);
        }

        $event->update($input);

        Alert::success('Data Event', 'Berhasil Diubah!');
        return redirect('/admin/event');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        File::delete('images/' . $event->poster);
        $event->delete();

        Alert::success('Data Event', 'Berhasil dihapus!');
        return redirect('/admin/event');
    }
}
