@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Tambah</span>
                </li>
                <li class="breadcrumb-item active">Jadwal</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-header align-items-center">
                <h5 class="mb-2">{{ $judul }}</h5>
                {{-- <small class="text-muted">{{ $subJudul }}</small> --}}
            </div>
            <div class="card-body">
                {{-- <form action="{{ route('admin.member.store') }}" method="POST"> --}}
                <form action="/admin/jadwal" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="hari">Hari</label>
                        <div class="col-sm-5">
                            <select class="form-select @error('hari') border-danger @enderror" id="hari" name="hari">
                                <option value="0" hidden disabled selected>Silahkan pilih Hari </option>
                                @if (old('hari') == "senin")
                                <option value="Senin" selected>Senin</option>
                                @elseif (old('hari') == "Selasa")
                                <option value="Selasa" selected>Selasa</option>
                                @elseif (old('hari') == "rabu")
                                <option value="Rabu" selected>Rabu</option>
                                @elseif (old('hari') == "kamis")
                                <option value="Kamis" selected>Kamis</option>
                                @elseif (old('hari') == "kamis")
                                <option value="Jumat" selected>Jumat</option>
                                @elseif (old('hari') == "kamis")
                                <option value="Sabtu" selected>Sabtu</option>
                                @elseif (old('hari') == "kamis")
                                <option value="Minggu" selected>Minggu</option>
                                @else
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                                @endif
                            </select>
                            @error('hari')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="jam">Waktu</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="text" class="form-control @error('jam') border-danger @enderror"
                                    id="jam" name="jam" value="{{ old('jam') }}" placeholder="Masukkan Waktu" />
                            </div>
                            @error('jam')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="tempat">Tempat</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <select class="form-select @error('tempat') border-danger @enderror" id="tempat"
                                    aria-label="Example select with button addon" name="tempat">
                                    <option selected>Pilih Tempat</option>
                                    <option value="Area Parkir Living Plaza">Area Parkir Living Plaza</option>
                                    <option value="Bima 2">Bima 2</option>
                                </select>
                            </div>
                            @error('tempat')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="level">Level</label>
                        <div class="col-sm-5">
                            <select class="form-select @error('level') border-danger @enderror" id="level" name="level">
                                <option value="0" hidden disabled selected>Silahkan pilih </option>
                                @if (old('level') == "Warior")
                                <option value="Warior" selected>Warior</option>
                                @elseif (old('level') == "Elite")
                                <option value="Elite" selected>Elite</option>
                                @elseif (old('level') == "Freestyle")
                                <option value="Freestyle" selected>Freestyle</option>
                                @elseif (old('level') == "Speed")
                                <option value="Speed" selected>Speed</option>
                                @else
                                <option value="Warior">Warior</option>
                                <option value="Elite">Elite</option>
                                <option value="Freestyle">Freestyle</option>
                                <option value="Speed">Speed</option>
                                @endif
                            </select>
                            @error('level')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end mt-4">
                        <div class="col-sm-10">
                            <a href="/admin/jadwal">
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
