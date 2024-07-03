@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Tambah</span>
                </li>
                <li class="breadcrumb-item active">Data Laporan Bulanan</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-header align-items-center">
                <h5 class="mb-2">{{ $judul }}</h5>
                {{-- <small class="text-muted">{{ $subJudul }}</small> --}}
            </div>
            <div class="card-body">
            {{-- <form action="{{ route('admin.member.store') }}" method="POST"> --}}
                <form action="/admin/laporan" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <select class="form-select @error('nama') border-danger @enderror" id="nama"
                                    aria-label="Example select with button addon" name="nama">
                                    <option selected>Pilih Member</option>
                                    @foreach ($member as $mmr)
                                        <option value="{{ $mmr->nama_anak }}">{{ $mmr->nama_anak }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="input-group">
                                <input type="text" class="form-control @error('nama') border-danger @enderror"
                                    id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama" />
                            </div> --}}
                            @error('nama')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="tanggal">Tanggal</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="date" class="form-control @error('tanggal') border-danger @enderror"
                                    id="tanggal" name="tanggal" value="{{ old('tanggal') }}" />
                            </div>
                            @error('tanggal')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="kompetensi">Kompetensi</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <textarea type="text" class="form-control @error('kompetensi') border-danger @enderror" id="kompetensi"
                                    name="kompetensi" rows="3">{{ old('kompetensi') }}</textarea>
                            </div>
                            @error('kompetensi')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="keterangan">Koeterangan</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <textarea type="text" class="form-control @error('keterangan') border-danger @enderror" id="keterangan"
                                    name="keterangan" rows="3">{{ old('keterangan') }}</textarea>
                            </div>
                            @error('keterangan')
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
                </form>
            </div>
        </div>
    </div>
@endsection
