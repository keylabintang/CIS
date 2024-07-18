@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Laporan</span>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-header align-items-center">
                <h5 class="mb-2">{{ $judul }}</h5>
                {{-- <small class="text-muted">{{ $subJudul }}</small> --}}
            </div>
            <div class="card-body">
                <form action="{{ route('laporan.update', $laporan->id_laporan) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="tempat">Nama</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $laporan->member->nama_anak }}" readonly />
                                <input type="hidden" name="id_member" value="{{ $laporan->id_member }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="bulan">Bulan</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="date" class="form-control @error('bulan') border-danger @enderror"
                                    id="bulan" name="bulan" value="{{ $laporan->bulan, $laporan->kompetensi }}" />
                            </div>
                            @error('bulan')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kompetensi" class="col-sm-2 col-form-label">Kompetensi</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <textarea name="kompetensi" id="kompetensi" cols="50" rows="5"> {{ old('kompetensi', $laporan->kompetensi) }} </textarea>
                            </div>
                            @error('kompetensi')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="level" class="col-sm-2 col-form-label">Catatan</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <textarea type="text" name="catatan" id="catatan" cols="50" rows="5"> {{ old('catatan', $laporan->catatan) }} </textarea>
                            </div>
                            @error('catatan')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end mt-4">
                        <div class="col-sm-10">
                            <a href="/admin/laporan">
                                <button type="button" class="btn btn-sm btn-secondary px-3">Kembali
                                </button>
                            </a>
                            <button type="submit" class="btn btn-sm btn-primary px-3">Simpan</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
