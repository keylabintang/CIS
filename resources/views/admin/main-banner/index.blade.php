@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">FAQ</span>
                </li>
                <li class="breadcrumb-item active">Daftar</li>
            </ol>
        </nav>
        <div class="card p-4 mb-5">
            <h5 class="card-header p-0 mb-4">{{ $judul }}</h5>

            <table id="example" class="table table-hover py-3" style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Span</th>
                        <th>Header</th>
                        <th>Paragraf</th>
                        <th>Tombol</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $loop->index + 1 }}. </td>
                            <td>{{ $dt->span }}</td>
                            <td>{{ $dt->header }}</td>
                            <td>{{ $dt->paragraf }}</td>
                            <td>{{ $dt->tombol }}</td>
                            <td>{{ $dt->link }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('banner.edit', $dt->id_banner) }}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @foreach ($data as $dt)
        <div class="card mb-3">
            <div class="row g-0">
            <div class="col-md-5">
                <div class="card-body">
                    <p class="card-text">
                        <small class="text-muted">{{ $dt->span }}</small>
                    </p>
                    <h5 class="card-title">{{ $dt->header }}</h5>
                    <p class="card-text">
                        {{ $dt->paragraf }}
                    </p>
                    <a href="{{ $dt->link }}" class="btn rounded-pill btn-primary">{{ $dt->tombol }}</a>
                </div>
            </div>
            <div class="col-md-7">
                <img class="card-img card-img-right" src="{{ asset('images/banner_skate2.jpg') }}" alt="Card image" />
            </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
