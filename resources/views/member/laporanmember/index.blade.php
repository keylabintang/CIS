@extends('member.layouts.main')

@section('content-member')
<div class="container-xxl flex-grow-1 container-p-y">
    <nav aria-label="breadcrumb" class="d-flex justify-content-end">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <span class="text-muted fw-light">Member</span>
            </li>
            <li class="breadcrumb-item active">Laporan</li>
        </ol>
    </nav>
    <div class="card mb-4">
        <br>
        <h3 class="text-center mb-3">{{ $judul }}</h3>
        <br>
        <div class="row mb-3 justify-content-center">
            @if ($data)
                <table id="example" class="table table-striped py-3" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Bulan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <tr>
                                <td>{{ $loop->index + 1 }}.</td>
                                <td>{{ \Carbon\Carbon::parse($dt->bulan)->translatedFormat('F Y') }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewdetail-{{ $dt->id_laporan }}">
                                        <i class="bx bx-file"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="viewdetail-{{ $dt->id_laporan }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Detail</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="demo-inline-spacing">
                                                    <div class="list-group list-group-flush">
                                                        <div class="list-group-item list-group-item-action mb-1">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <span>Nama</span>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <span>: {{ $dt->nama }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item list-group-item-action mb-1">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <span>Bulan</span>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <span>: {{ \Carbon\Carbon::parse($dt->bulan)->translatedFormat('l, d F Y') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item list-group-item-action mb-1">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <span>Kompetensi</span>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <span>: {{ $dt->kompetensi }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item list-group-item-action mb-1">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <span>Catatan</span>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <span>: {{ $dt->catatan }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center">Data Laporan tidak tersedia.</p>
            @endif
        </div>
    </div>
</div>

<style>
    .data-item {
        display: flex;
        flex-direction: column; /* Stack items vertically */
        align-items: center; /* Center items horizontally */
        margin-bottom: 10px;
    }
    .label {
        font-weight: bold;
        margin-bottom: 5px; /* Add space between label and value */
    }
    .card {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px; /* Add padding to the card */
    }
</style>
@endsection
