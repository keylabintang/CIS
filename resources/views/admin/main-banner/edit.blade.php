@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Main Banner</span>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-header align-items-center">
                <h5 class="mb-2">{{ $judul }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('banner.update', $data->id_banner) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="span">Span</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control @error('span') border-danger @enderror"
                                    id="span" name="span" value="{{ old('span', $data->span) }}" />
                            </div>
                            @error('span')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="header">Header</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control @error('header') border-danger @enderror"
                                    id="header" name="header" value="{{ old('header', $data->header) }}" />
                            </div>
                            @error('header')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="paragraf">Paragraf</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <textarea type="text" class="form-control @error('paragraf') border-danger @enderror"
                                    id="paragraf" name="paragraf" rows="5">{{ old('paragraf',$data->paragraf) }}</textarea>
                            </div>
                            @error('paragraf')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="tombol">Tombol</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control @error('tombol') border-danger @enderror"
                                    id="tombol" name="tombol" value="{{ old('tombol', $data->tombol) }}" />
                            </div>
                            @error('tombol')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="link">Link</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control @error('link') border-danger @enderror"
                                    id="link" name="link" value="{{ old('link', $data->link) }}" />
                            </div>
                            @error('link')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end mt-4">
                        <div class="col-sm-10">
                            <a href="/admin/banner">
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
