@extends('admin.layouts.main')

@section('content-admin')
<div class="container-xxl flex-grow-1 container-p-y">
    <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <span class="text-muted fw-light">Biaya</span>
            </li>
            <li class="breadcrumb-item active">Data Biaya Bulanan</li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-header align-items-center">
            <h5 class="mb-2">{{ $judul }}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('biaya.update', $biaya->id_biaya) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="tempat">Nama</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" class="form-control" id="id_member" name="id_member"
                                value="{{ $biaya->member->nama_anak }}" readonly />
                            <input type="hidden" name="id_member" value="{{ $biaya->id_member }}" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="tanggal">Tanggal</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="date" class="form-control @error('tanggal') border-danger @enderror"
                                id="tanggal" name="tanggal" value="{{ old('tanggal', $biaya->tanggal) }}" />
                        </div>
                        @error('tanggal')
                        <div class="form-text text-danger">
                            *{{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenis_pembayaran" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <select class="form-select @error('jenis_pembayaran') border-danger @enderror"
                                id="jenis_pembayaran" name="jenis_pembayaran">
                                <option value="" disabled {{ old('jenis_pembayaran', $biaya->jenis_pembayaran) ? '' : 'selected' }}>Pilih Jenis Pembayaran</option>
                                <option value="SPP" {{ old('jenis_pembayaran', $biaya->jenis_pembayaran) == 'SPP' ? 'selected' : '' }}>SPP</option>
                                <option value="Jersey" {{ old('jenis_pembayaran', $biaya->jenis_pembayaran) == 'Jersey' ? 'selected' : '' }}>Jersey</option>
                                <option value="Pendaftaran Lomba" {{ old('jenis_pembayaran', $biaya->jenis_pembayaran) == 'Pendaftaran Lomba' ? 'selected' : '' }}>Pendaftaran Lomba</option>
                            </select>
                        </div>
                        @error('jenis_pembayaran')
                        <div class="form-text text-danger">
                            *{{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <select class="form-select @error('keterangan') border-danger @enderror" id="keterangan"
                                name="keterangan">
                                <option value="" disabled {{ old('keterangan', $biaya->keterangan) ? '' : 'selected' }}>Pilih Jenis Keterangan</option>
                                <option value="Lunas" {{ old('keterangan', $biaya->keterangan) == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                <option value="Belum Lunas" {{ old('keterangan', $biaya->keterangan) == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                            </select>
                        </div>
                        @error('keterangan')
                        <div class="form-text text-danger">
                            *{{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="bukti">Bukti Pembayaran</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="file" id="bukti" class="form-control @error('bukti') border-danger @enderror"
                                name="bukti" accept="image/*"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        @error('bukti')
                        <div class="form-text text-danger">
                            *{{ $message }}
                        </div>
                        @enderror
                        <div class="img-output mt-3 d-flex justify-content-center">
                            <img src="{{ asset('images/' . $biaya->bukti) }}" id="output" width="280">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mt-4">
                    <div class="col-sm-10">
                        <a href="/admin/biaya">
                            <button type="button" class="btn btn-sm btn-secondary px-3">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-sm btn-primary px-3">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.getElementById('bukti').addEventListener('change', function() {
        document.getElementById('output').src = window.URL.createObjectURL(this.files[0]);
    });
</script>
@endsection
