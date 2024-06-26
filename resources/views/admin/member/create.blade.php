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
                <form action="{{ route('member.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="nama_anak">Nama Anak</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="text" class="form-control @error('nama_anak') border-danger @enderror"
                                    id="nama_anak" name="nama_anak" value="{{ old('nama_anak') }}" placeholder="Masukkan Nama Anak" />
                            </div>
                            @error('nama_anak')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="jenis_kelamin">Jenis Kelamin</label>
                        <div class="col-sm-5">
                            <select class="form-select @error('jenis_kelamin') border-danger @enderror" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="0" hidden disabled selected>Silahkan pilih </option>
                                @if (old('jenis_kelamin') == "Laki-laki")
                                <option value="Laki-laki" selected>Laki-laki</option>
                                @elseif (old('jenis_kelamin') == "Perempuan")
                                <option value="Perempuan" selected>Perempuan</option>
                                @else
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                @endif
                            </select>
                            @error('jenis_kelamin')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="date" class="form-control @error('tanggal_lahir') border-danger @enderror"
                                    id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" />
                            </div>
                            @error('tanggal_lahir')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="ig_anak">Instagram Anak</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="text" class="form-control @error('ig_anak') border-danger @enderror"
                                    id="ig_anak" name="ig_anak" value="{{ old('ig_anak') }}"
                                    placeholder="Contoh @instagram_anak" />
                            </div>
                            @error('ig_anak')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="nama_ortu">Nama Orang Tua</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="text" class="form-control @error('nama_ortu') border-danger @enderror"
                                    id="nama_ortu" name="nama_ortu" value="{{ old('nama_ortu') }}"
                                    placeholder="Masukkan Nama Orang Tua" />
                            </div>
                            @error('nama_ortu')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="wa_ortu">Nomor WA Orang Tua</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="number" class="form-control @error('wa_ortu') border-danger @enderror"
                                    id="wa_ortu" name="wa_ortu" value="{{ old('wa_ortu') }}"
                                    placeholder="Masukkan Nomor WA Orang Tua" />
                            </div>
                            @error('wa_ortu')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="ig_ortu">Instagram Orang Tua</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="text" class="form-control @error('ig_ortu') border-danger @enderror"
                                    id="ig_ortu" name="ig_ortu" value="{{ old('ig_ortu') }}"
                                    placeholder="Masukkan Instagram Orang Tua" />
                            </div>
                            @error('ig_ortu')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="alamat">Alamat</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <textarea type="text" class="form-control @error('alamat') border-danger @enderror"
                                    id="alamat" name="alamat"
                                    placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
                            </div>
                            @error('alamat')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="asal_sekolah">Asal Sekolah Anak</label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="text" class="form-control @error('asal_sekolah') border-danger @enderror"
                                    id="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah') }}"
                                    placeholder="Masukkan Sekolah Anak" />
                            </div>
                            @error('asal_sekolah')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="level">Level</label>
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
                        <div class="col-sm-12">
                            <a href="/admin/member">
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
