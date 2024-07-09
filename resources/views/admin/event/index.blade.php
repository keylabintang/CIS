@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Event</span>
                </li>
                <li class="breadcrumb-item active">Daftar</li>
            </ol>
        </nav>
        <div class="card p-4">
            <h5 class="card-header p-0 mb-4">{{ $judul }}</h5>

            <table id="example" class="table table-hover py-3" style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Poster</th>
                        <th>Nama</th>
                        <th>Timeline</th>
                        <th>Tempat</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $loop->index + 1 }}. </td>
                            <td>
                                <img src="{{ asset('images/' . $dt->poster) }}" alt="poster event" width="45">
                            </td>
                            <td>{{ $dt->nama }}</td>
                            <td>{{ $dt->timeline }}</td>
                            <td>{{ $dt->tempat }}</td>
                            <td>{{ $dt->keterangan }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('event.edit', $dt->id_event) }}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="{{ route('event.destroy', $dt->id_event) }}"
                                            data-confirm-delete="true">
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
@endsection
