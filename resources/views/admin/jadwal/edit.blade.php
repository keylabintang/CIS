@extends('admin.layouts.main')

@section('content-admin')
<div class="container-xxl flex-grow-1 container-p-y">
    <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}" class="text-muted fw-light">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('jadwal.index') }}" class="text-muted fw-light">Jadwal</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-header align-items-center">
            <h5 class="mb-2">{{ $judul }}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('jadwal.update', $jadwal->id_jadwal) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-4">
                        <select class="form-select @error('hari') border-danger @enderror" id="hari"
                            name="hari">
                            <option value="" disabled>Pilih Hari</option>
                            <option value="Senin" {{ old('hari', $jadwal->hari) == 'senin' ? 'selected' : '' }}>Senin</option>
                            <option value="Selasa" {{ old('hari', $jadwal->hari) == 'selasa' ? 'selected' : '' }}>Selasa</option>
                            <option value="Rabu" {{ old('hari', $jadwal->hari) == 'rabu' ? 'selected' : '' }}>Rabu</option>
                            <option value="Kamis" {{ old('hari', $jadwal->hari) == 'kamis' ? 'selected' : '' }}>Kamis</option>
                            <option value="Jumat" {{ old('hari', $jadwal->hari) == 'jumat' ? 'selected' : '' }}>Jumat</option>
                            <option value="Sabtu" {{ old('hari', $jadwal->hari) == 'sabtu' ? 'selected' : '' }}>Sabtu</option>
                            <option value="Minggu" {{ old('hari', $jadwal->hari) == 'minggu' ? 'selected' : '' }}>Minggu</option>
                        </select>
                        @error('hari')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="jam">Waktu</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control @error('jam') border-danger @enderror"
                            id="jam" name="jam" value="{{ old('jam', $jadwal->jam) }}" placeholder="Masukkan Waktu" />
                        @error('jam')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tempat" class="col-sm-2 col-form-label">tempat</label>
                    <div class="col-sm-4">
                        <select class="form-select @error('tempat') border-danger @enderror" id="tempat"
                            name="tempat">
                            <option value="" disabled>Pilih tempat</option>
                            <option value="Area Parkir Living Plaza" {{ old('tempat', $jadwal->tempat) == 'Area Parkir Living Plaza' ? 'selected' : '' }}>Senin</option>
                            <option value="Bima 2" {{ old('tempat', $jadwal->tempat) == 'Bima 2' ? 'selected' : '' }}>Selasa</option>
                        </select>
                        @error('tempat')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="level" class="col-sm-2 col-form-label">level</label>
                    <div class="col-sm-4">
                        <select class="form-select @error('level') border-danger @enderror" id="level"
                            name="level">
                            <option value="" disabled>Pilih level</option>
                            <option value="Warrior" {{ old('level', $jadwal->level) == 'Warrior' ? 'selected' : '' }}>Warrior</option>
                            <option value="Elite" {{ old('level', $jadwal->level) == 'Elite' ? 'selected' : '' }}>Elite</option>
                            <option value="Freestyle" {{ old('level', $jadwal->level) == 'Freestyle' ? 'selected' : '' }}>Freestyle</option>
                            <option value="Speed" {{ old('level', $jadwal->level) == 'Speed' ? 'selected' : '' }}>Speed</option>
                        </select>
                        @error('level')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-end mt-4">
                    <div class="col-sm-10">
                        <a href="{{ route('jadwal.index') }}" class="btn btn-sm btn-secondary px-3">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-primary px-3">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
