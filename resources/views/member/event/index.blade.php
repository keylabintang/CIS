@extends('member.layouts.main')

@section('content-member')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Event</span>
                </li>
                <li class="breadcrumb-item active">P</li>
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
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
