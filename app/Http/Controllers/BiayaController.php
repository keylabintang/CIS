<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use App\Models\Member;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class BiayaController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$judul = "Data Biaya Bulanan";
		$data = Biaya::orderBy('id_biaya', 'asc')->get();

		return view('admin.biaya.index', compact('judul', 'data'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		$judul = "Tambah Data Biaya Bulanan";
		$member = Member::all();

		return view('admin.biaya.create', compact('judul', 'member'));
	}

	/*
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		$request->validate([
			'nama' => 'required',
			'tanggal' => 'required',
			'jenis_pembayaran' => 'required',
			'keterangan' => 'required',
			'bukti.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
		], [
			'nama.required' => 'Nama wajib diisi',
			'tanggal.required' => 'Tanggal wajib diisi',
			'jenis_pembayaran.required' => 'Jenis Pembayaran wajib diisi',
			'keterangan.required' => 'Keterangan wajib diisi',
			'bukti.*.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
		]);

		$input = $request->all();

		if ($image = $request->file("bukti")) {
			$destinationPath = "images/";
			$profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
			$image->move($destinationPath, $profileImage);
			$input["bukti"] = "$profileImage";
		}

		Biaya::create($input);

		Alert::success('Data Biaya', 'Berhasil Ditambahkan!');
		return redirect('/admin/biaya');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Biaya $biaya)
	{
		// Implementasikan jika diperlukan
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Biaya $biaya)
	{
		$judul = "Edit Data Biaya Bulanan";

		return view('admin.biaya.edit', compact('biaya', 'judul'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Biaya $biaya)
	{
		$request->validate([
			'nama' => 'required',
			'tanggal' => 'required',
			'jenis_pembayaran' => 'required',
			'keterangan' => 'required',
			'bukti' => 'required',
			'bukti.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
		], [
			'nama.required' => 'Nama wajib diisi',
			'tanggal.required' => 'Tanggal wajib diisi',
			'jenis_pembayaran.required' => 'Jenis Pembayaran wajib diisi',
			'keterangan.required' => 'Keterangan wajib diisi',
			'bukti.*.image' => 'File foto harus diisi dengan file jpeg, png, jpg, gif, svg, webp',
		]);

			$input = $request->all();

		if ($image = $request->file('bukti')) {
			// Hapus file lama
			$path = 'images/';
			if ($biaya->bukti != '' && $biaya->bukti != null) {
				$file_old = $path . $biaya->bukti;
				if (File::exists($file_old)) {
					File::delete($file_old);
				}
			}

			// Upload file baru
			$destinationPath = 'images/';
			$profileImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
			$image->move($destinationPath, $profileImage);
			$input['bukti'] = $profileImage;
		} else {
			unset($input['bukti']);
		}

		$biaya->update($input);

		Alert::success('Data biaya', 'Berhasil diubah!');
		return redirect('/admin/biaya');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Biaya $biaya)
	{
		$path = "images/";

		if ($biaya->bukti != '' && $biaya->bukti != null) {
			$file_old = $path . $biaya->bukti;
			if (File::exists($file_old)) {
				File::delete($file_old);
			}
		}

		$biaya->delete();
		Alert::success('Data Biaya', 'Berhasil Dihapus!');
		return redirect('/admin/biaya');
	}
}
