@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Event</span>
                </li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-header align-items-center">
                <h5 class="mb-2">{{ $judul }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama">Nama Event</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control @error('nama') border-danger @enderror"
                                    id="nama" name="nama" value="{{ old('nama') }}" />
                            </div>
                            @error('nama')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="timeline">Timeline</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control @error('timeline') border-danger @enderror"
                                    id="timeline" name="timeline" value="{{ old('timeline') }}" />
                            </div>
                            @error('timeline')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="tempat">Tempat</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control @error('tempat') border-danger @enderror"
                                    id="tempat" name="tempat" value="{{ old('tempat') }}" />
                            </div>
                            @error('tempat')
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
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="poster">Poster</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="file" id="poster"
                                    class="form-control @error('poster') border-danger @enderror" name="poster"
                                    value="{{ old('poster') }}" accept="image/*"
                                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            @error('poster')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                            <div class="img-output mt-3 d-flex justify-content-center">
                                <img src="" id="output" width="280">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end mt-4">
                        <div class="col-sm-10">
                            <a href="/admin/event">
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
    <script>
        document.getElementById('foto').addEventListener('change', function() {
            document.getElementById('hilang').style.display = 'none';
        });
    </script>
@endsection
