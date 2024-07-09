@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">{{ $judul }}</span>
                </li>
                <li class="breadcrumb-item active">{{ $judul }}</li>
            </ol>
        </nav>
        <div class="card p-4">
            <h5 class="card-header p-0 mb-4">{{ $judul }}</h5>

            <table id="example" class="table table-striped py-3" style="width: 100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Level</th>
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
                            <td>{{ $dt->hari }}</td>
                            <td>{{ $dt->jam }}</td>
                            <td>{{ $dt->tempat }}</td>
                            <td>{{ $dt->level }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('jadwal.edit', $dt->id_jadwal) }}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('jadwal.destroy', $dt->id_jadwal) }}" method="POST">
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
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
