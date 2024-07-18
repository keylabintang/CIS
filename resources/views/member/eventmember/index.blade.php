@extends('member.layouts.main')

@section('content-member')
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <span class="text-muted fw-light">Member</span>
                </li>
                <li class="breadcrumb-item active">Event</li>
            </ol>
        </nav>
        <div class="card mb-4">
            <br>
            <h3 class="text-center mb-3">{{ $judul }}</h3>
            <br>
            <div class="row mb-3 justify-content-center">
                @if ($data)
                    @foreach ($data as $dt)
                    @php
                        \Carbon\Carbon::setLocale('id'); 
                    @endphp
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card p-3">
                                <div class="judul">
                                    <div class="value">{{ $dt->nama }}</div>
                                </div>
                                <div class="data-item">
                                    <div>                                
                                        <img src="{{ asset('images/' . $dt->poster) }}" alt="poster" width="250" >
                                    </div>
                                </div>
                                <br>
                                <div class="data-item">
                                    <div class="value">{{ $dt->timeline }}</div>
                                </div>

                                <div class="data-item">
                                    <div class="value">{{ $dt->tempat }}</div>
                                </div>

                                <div class="data-item">
                                    <div class="value">{{ $dt->keterangan }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center">Data Program tidak tersedia.</p>
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
        .judul {
            display: flex;
            flex-direction: column; /* Stack items vertically */
            align-items: center; /* Center items horizontally */
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
            font-style: italic;
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
