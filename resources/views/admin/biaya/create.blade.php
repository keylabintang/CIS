@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Tambah</span>
                </li>
                <li class="breadcrumb-item active">Data Biaya Bulanan</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-header align-items-center">
                <h5 class="mb-2">{{ $judul }}</h5>
                {{-- <small class="text-muted">{{ $subJudul }}</small> --}}
            </div>
            <div class="card-body">
                <form action="{{ route('biaya.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <select class="form-select @error('nama') border-danger @enderror" id="nama"
                                    aria-label="Example select with button addon" name="nama">
                                    <option selected>Pilih Member</option>
                                    @foreach ($member as $mmr)
                                        <option value="{{ $mmr->nama_anak }}">{{ $mmr->nama_anak }}</option>
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
                                <input type="date" class="form-control @error('tanggal') border-danger @enderror"
                                    id="tanggal" name="tanggal" value="{{ old('tanggal') }}" />
                            </div>
                            @error('tanggal')
                                <div class="form-text text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="level" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <select class="form-select @error('jenis_pembayaran') border-danger @enderror" id="jenis_pembayaran"
                                    aria-label="Example select with button addon" name="jenis_pembayaran">
                                    <option selected>Pilih Jenis Pembayaran</option>
                                    <option value="spp">SPP</option>
                                    <option value="jersey">Jersey</option>
                                    <option value="pendaftaran lomba">Pendaftaran Lomba</option>
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
                        <label for="level" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <select class="form-select @error('keterangan') border-danger @enderror" id="keterangan"
                                    aria-label="Example select with button addon" name="keterangan">
                                    <option selected>Pilih Keterangan</option>
                                    <option value="lunas">Lunas</option>
                                    <option value="lunas">Belum Lunas</option>
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
                                <input type="file" id="bukti"
                                    class="form-control @error('bukti') border-danger @enderror" name="bukti"
                                    value="{{ old('bukti') }}" accept="image/*"
                                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            @error('bukti')
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
    <script>
        document.getElementById('bukti').addEventListener('change', function() {
            document.getElementById('hilang').style.display = 'none';
        });
    </script>
@endsection
