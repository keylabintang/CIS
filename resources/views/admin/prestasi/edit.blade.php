@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Prestasi</span>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-header align-items-center">
                <h5 class="mb-2">{{ $judul }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('prestasi.update', $data->id_prestasi) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control @error('nama') border-danger @enderror"
                                    id="nama" name="nama" value="{{ old('nama', $data->nama) }}" />
                            </div>
                            @error('nama')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="keterangan">Keterangan</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <textarea type="text" class="form-control @error('keterangan') border-danger @enderror"
                                    id="keterangan" name="keterangan" rows="5">{{ old('keterangan',$data->keterangan) }}</textarea>
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
                            <a href="/admin/prestasi">
                                <button type="button" class="btn btn-sm btn-secondary px-3">Back
                                </button>
                            </a>
                            <button type="submit" class="btn btn-sm btn-primary px-3">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
