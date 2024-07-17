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
                <form action="{{ route('laporan.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <select class="form-select @error('id_member') border-danger @enderror" id="id_member"
                                    aria-label="Example select with button addon" name="id_member">
                                    <option selected>Pilih Member</option>
                                    @foreach ($member as $mmr)
                                        <option value="{{ $mmr->id_member }}">{{ $mmr->nama_anak }}</option>
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
                                <input type="date" class="form-control @error('bulan') border-danger @enderror"
                                    id="bulan" name="bulan" value="{{ old('bulan') }}" />
                            </div>
                            @error('bulan')
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
                                    name="kompetensi" rows="5">{{ old('kompetensi') }}</textarea>
                            </div>
                            @error('kompetensi')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="catatan">Catatan</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <textarea type="text" class="form-control @error('catatan') border-danger @enderror" id="catatan"
                                    name="catatan" rows="5">{{ old('catatan') }}</textarea>
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
                </form>
            </div>
        </div>
    </div>
@endsection
