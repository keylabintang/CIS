@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Member</span>
                </li>
                <li class="breadcrumb-item active">Daftar</li>
            </ol>
        </nav>
        <div class="card p-4">
            <h5 class="card-header p-0 mb-4">{{ $judul }}</h5>

            <table id="example" class="table table-hover py-3" style="width: 100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Orang Tua</th>
                        <th>WA Ortu</th>
                        <th>Alamat</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}. </td>
                            <td>
                                <img src="{{ asset('images/'.$dt->foto) }}" alt="foto" width="45">
                            </td>
                            <td>{{ $dt->nama_anak }}</td>
                            <td>{{ $dt->umur }} Tahun</td>
                            <td>{{ $dt->nama_ortu }}</td>
                            <td>{{ $dt->wa_ortu }}</td>
                            <td>{{ $dt->alamat }}</td>
                            <td>{{ $dt->level }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#viewdetail-{{ $dt->nama_anak }}">
                                            <i class="bx bx-error-circle me-1"></i>
                                            Detail
                                        </a>
                                        <a class="dropdown-item" href="{{ route('member.edit', $dt->id_member) }}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="{{ route('member.destroy', $dt->id_member) }}" data-confirm-delete="true">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach ($data as $dt)
    @include('admin.member.detail')
    @endforeach
    
@endsection
