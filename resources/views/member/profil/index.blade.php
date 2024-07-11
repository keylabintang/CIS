@extends('member.layouts.main')

@section('content-member')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Member</span>
                </li>
                <li class="breadcrumb-item active">Profil</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <h5 class="card-header align-items-center">{{ $judul }}</h5>

            <div class="rrow mb-3>
                @foreach ($data as $dt)
                    <div class="col>
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="text-center mb-3">
                                    <img src="{{ asset('images/' . $dt->foto) }}" alt="Foto" class="rounded-circle foto-profil">
                                </div>
                                <div class="data-item">
                                    <div class="label">Nama</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->nama_anak }}</div>
                                </div>
                                <div class="data-item">
                                    <div class="label">Jenis Kelamin</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->jenis_kelamin }}</div>
                                </div>
                                <div class="data-item">
                                    <div class="label">Tanggal Lahir</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->tanggal_lahir }}</div>
                                </div>
                                <div class="data-item">
                                    <div class="label">Umur</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->umur }}</div>
                                </div>
                                <div class="data-item">
                                    <div class="label">Instagram</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->ig_anak }}</div>
                                </div>
                                <div class="data-item">
                                    <div class="label">Nama Orang Tua</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->nama_ortu }}</div>
                                </div>
                                <div class="data-item">
                                    <div class="label">WhatsApp Orang Tua</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->wa_ortu }}</div>
                                </div>
                                <div class="data-item">
                                    <div class="label">Instagram Orang Tua</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->ig_ortu }}</div>
                                </div>
                                <div class="data-item">
                                    <div class="label">Alamat</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->alamat }}</div>
                                </div>
                                <div class="data-item">
                                    <div class="label">Asal Sekolah</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->asal_sekolah }}</div>
                                </div>
                                <div class="data-item">
                                    <div class="label">Level</div>
                                    <div class="separator">:</div>
                                    <div class="value">{{ $dt->level }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <style>
        .data-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .data-item .label {
            flex: 1;
            font-weight: bold;
            padding-right: 10px; /* Kurangi padding agar tidak terlalu lebar */
            text-align: left; /* Pastikan label rata kiri */
            white-space: nowrap; /* Agar teks label tidak terpotong */
        }
        .data-item .separator {
            flex: 0 0 10px; /* Sesuaikan lebar separator agar tidak terlalu lebar */
            text-align: center;
            margin-right: 10px; /* Tambahkan margin kanan untuk memberi jarak dengan value */
        }
        .data-item .value {
            flex: 2;
            text-align: left;
            padding-left: 10px;
        }
        .foto-profil {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 15px; /* Tambahkan margin bawah agar ada jarak dengan data-item berikutnya */
        }
    </style>
     
@endsection