@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-mmr">
                    <span class="text-muted fw-light">{{ $judul }}</span>
                </li>
                <li class="breadcrumb-mmr active">{{ $judul }}</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-header align-mmrs-center">
                <h5 class="mb-2">{{ $judul }}</h5>
                {{-- <small class="text-muted">{{ $subJudul }}</small> --}}
            </div>
            <div class="card-body">

                <div class="row mb-3">

                    <label for="level" class="col-sm-2 col-form-label">Jadwal</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <form action="{{ route('absensi.store') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <select class="form-select @error('tanggal') border-danger @enderror" id="tanggal"
                                        aria-label="Example select with button addon" name="tanggal">
                                        <option selected>Pilih jadwal</option>
                                        @foreach ($jadwal as $jdl)
                                            <option value="{{ $jdl->tanggal }}">
                                                {{ \Carbon\Carbon::parse($jdl->tanggal)->format('d-m-Y') }}</option>
                                        @endforeach

                                    </select>
                                    <button class="btn btn-outline-primary" type="submit">Tambah</button>
                                </div>

                            </form>
                        </div>

                        @error('keterangan')
                            <div class="form-text text-danger">
                                *{{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
                <table id="example" class="table table-striped py-3" style="wimmrh: 100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($absensi as $mmr)
                            <tr>
                                <td>{{ $loop->index + 1 }}. </td>
                                <td>{{ $mmr->nama }}</td>
                                <td>{{ \Carbon\Carbon::parse($mmr->tanggal)->format('d-m-Y') }}</td>
                                <td>
                                    {{-- <form action="{{ route('absensi.update'), $mmr->id_absensi }}" method="POST"> --}}
                                    {{-- @csrf --}}
                                    {{-- @method('PUT') --}}
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ $mmr->nama }}" hidden />
                                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                                        value="{{ $mmr->tanggal }}" hidden />
                                    <div class="input-group">
                                        <select class="form-select @error('keterangan') border-danger @enderror"
                                            id="keterangan" aria-label="Example select with button addon" name="keterangan">
                                            <option selected>Pilih Keterangan</option>
                                            <option value="hadir">hadir</option>
                                            <option value="hadir">izin</option>
                                            <option value="hadir">sakit</option>
                                            <option value="hadir">cuti</option>
                                            <option value="hadir">tanpa keterangan</option>
                                        </select>
                                        <button class="btn btn-outline-primary" type="submit">Simpan</button>
                                    </div>
                                    {{-- </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="row justify-content-end mt-4">
                    <div class="col-sm-10">
                        <a href="/admin/biaya">
                            <button type="button" class="btn btn-sm btn-secondary px-3">Kembali
                            </button>
                        </a>
                        <button type="submit" class="btn btn-sm btn-primary px-3">Simpan</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
