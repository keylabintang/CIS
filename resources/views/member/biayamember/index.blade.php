@extends('member.layouts.main')

@section('content-member')
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
                <h3 class="mb-2">{{ $judul }}</h3>
                {{-- <small class="text-muted">{{ $subJudul }}</small> --}}
            </div>
            <div class="card-body">
                <form action="{{ route('biayamember.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control @error('id_member') border-danger @enderror"
                                    id="id_member" name="id_member" value="{{ Auth::user()->nama }}" readonly />
                                    <input type="hidden" name="id_member" value="{{ Auth::user()->member->id_member }}" />
                                    </div>
                            @error('id_member')
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
                        <label for="level" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <select class="form-select @error('keterangan') border-danger @enderror" id="keterangan"
                                    aria-label="Example select with button addon" name="keterangan">
                                    <option value="Menunggu Konfirmasi" selected>Menunggu Konfirmasi</option>
                                   
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
                        <label for="level" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <select class="form-select @error('jenis_pembayaran') border-danger @enderror" id="jenis_pembayaran"
                                    aria-label="Example select with button addon" name="jenis_pembayaran">
                                    <option selected>Pilih Jenis Pembayaran</option>
                                    <option value="SPP">SPP</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Pendaftaran Lomba">Pendaftaran Lomba</option>
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

        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('tanggal').value = today;
        }); 
    </script>

<!--view--> 
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card p-4">
            <h3 class="card-header p-0 mb-4">{{ $judul2 }}</h3>

            <table id="example" class="table table-striped py-3" style="width: 100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Jenis Pembayaran</th>
                        <th>Keterangan</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $loop->index + 1 }}. </td>
                            <td>{{ \Carbon\Carbon::parse($dt->tanggal)->translatedFormat('l, d F Y') }}</td>
                            <td>{{ $dt->jenis_pembayaran }}</td>
                            <td>{{ $dt->keterangan }}</td>
                            <td>
                                <img src="{{ asset('images/'.$dt->bukti) }}" alt="bukti" width="45">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection