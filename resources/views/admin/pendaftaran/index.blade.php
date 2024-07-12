@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Pendaftaran</span>
                </li>
                <li class="breadcrumb-item active">Daftar</li>
            </ol>
        </nav>
        <div class="card p-4">
            <h5 class="card-header p-0 mb-4">{{ $judul }}</h5>
            <table id="example" class="table table-hover py-3 " style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Orang Tua</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        @php
                            \Carbon\Carbon::setLocale('id');
                        @endphp
                        <tr>
                            <td>{{ $loop->index + 1 }}. </td>
                            <td>{{ \Carbon\Carbon::parse($dt->created_at)->translatedFormat('l, d F Y') }}</td>
                            <td>{{ $dt->nama_anak }}</td>
                            <td>{{ $dt->umur }} Tahun</td>
                            <td>{{ $dt->nama_ortu }}</td>
                            <td>
                                <a href="javascript:void(0);" class="badge rounded-pill bg-label-dark"
                                    data-bs-toggle="modal" data-bs-target="#bukti-pembayaran-{{ $dt->nama_anak }}">Show</a>

                                <!-- Modal -->
                                <div class="modal fade" id="bukti-pembayaran-{{ $dt->nama_anak }}" tabindex="-1"
                                    style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Butki Pembayaran</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <img src="{{ asset('images/' . $dt->bukti_pembayaran) }}"
                                                        alt="bukti pembayaran">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if ($dt->status == 2)
                                    <span class="badge rounded-pill bg-success">Receive</span>
                                @elseif($dt->status == 3)
                                    <span class="badge rounded-pill bg-danger">Reject</span>
                                @else
                                    <span class="badge rounded-pill bg-warning">Waiting</span>
                                @endif
                            </td>
                            <td>
                                @if ($dt->status == 1)
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#viewdetail-{{ $dt->nama_anak }}">
                                                <i class="bx bx-error-circle me-1"></i>
                                                View Detail
                                            </a>
                                            <form action="{{ route('pendaftaran.receive', $dt->id_pendaftaran) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bx bx-check-circle me-1"></i>
                                                    Receive
                                                </button>
                                            </form>
                                            <form action="{{ route('pendaftaran.reject', $dt->id_pendaftaran) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bx bx-x-circle me-1"></i>
                                                    Reject
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#viewdetail-{{ $dt->nama_anak }}">
                                                <i class="bx bx-error-circle me-1"></i>
                                                View Detail
                                            </a>
                                            <form action="{{ route('pendaftaran.destroy', $dt->id_pendaftaran) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"
                                                    onclick="javascript: return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                                    <i class="bx bx-trash me-1"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach ($data as $dt)
        @include('admin.pendaftaran.detail')
    @endforeach
@endsection