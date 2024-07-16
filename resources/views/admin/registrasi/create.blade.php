@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Member</span>
                </li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-header align-items-center">
                <h5 class="mb-2">{{ $judul }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('registrasi.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="name">Nama User</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <select class="form-select @error('nama') border-danger @enderror" id="nama"
                                    aria-label="Example select with button addon" name="nama">
                                    <option selected>Pilih Member</option>
                                    @foreach ($member as $mmr)
                                        <option value="{{ $mmr->nama_anak }}">{{ $mmr->nama_anak }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('nama')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="email">Email User</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="email" class="form-control @error('email') border-danger @enderror"
                                    id="email" name="email" value="{{ old('email') }}"
                                    placeholder="Masukkan Email" />
                            </div>
                            @error('email')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="password">Password</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="text" class="form-control @error('password') border-danger @enderror"
                                    id="password" name="password" value="{{ old('password') }}"
                                    placeholder="Masukkan Password" />
                            </div>
                            @error('password')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="role_as">Role</label>
                        <div class="col-sm-5">
                            <select class="form-select @error('role_as') border-danger @enderror" id="role_as" name="role_as">
                                <option  hidden disabled selected>Silahkan pilih Role</option>
                                @if (old('role_as') == "1")
                                @elseif (old('role_as') == "2")
                                @else
                                <option value="1">Admin</option>
                                <option value="2">Member</option>
                                @endif
                            </select>
                            @error('role_as')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-end mt-4">
                        <div class="col-sm-12">
                            <a href="/admin/registrasi">
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
