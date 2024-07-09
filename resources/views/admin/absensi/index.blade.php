@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">{{ $judul }}</span>
                </li>
                <li class="breadcrumb-item active">{{ $judul }}</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-header align-items-center">
                <h5 class="mb-2">{{ $judul }}</h5>
                {{-- <small class="text-muted">{{ $subJudul }}</small> --}}
            </div>
            <div class="card-body">
                {{-- <form action="{{ route('admin.member.store') }}" method="POST"> --}}
                <form action="/admin/biaya" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="level" class="col-sm-2 col-form-label">Jadwal</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input class="form-control @error('keterangan') border-danger @enderror"
                                    list="datalistOptions" id="keterangan" name="keterangan" value="{{ old('keterangan') }}"
                                    placeholder="Pilih Keterangan" />
                                <datalist id="datalistOptions">
                                    <option value="Lunas"></option>
                                    <option value="Belum Lunas"></option>
                                </datalist>
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
                            <a href="/admin/biaya">
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
