@php
    \Carbon\Carbon::setLocale('id');
@endphp
<!-- Modal -->
<div class="modal fade" id="viewdetail-{{ $dt->id_pendaftaran }}" tabindex="-1" style="display: none;" aria-hidden="true">
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
                                        <span>Nama Anak</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>: {{ $dt->nama_anak }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Jenis Kelamin</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>: {{ $dt->jenis_kelamin }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Tanggal Lahir</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>:
                                            {{ \Carbon\Carbon::parse($dt->tanggal_lahir)->translatedFormat('l, d F Y') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Umur</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>: {{ $dt->umur }} Tahun</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Sekolah</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>: {{ $dt->asal_sekolah }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Instagram</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>: {{ $dt->ig_anak }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Nama Orang Tua</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>: {{ $dt->nama_ortu }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Nomor Whatsapp</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>: {{ $dt->wa_ortu }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Instagram</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>: {{ $dt->ig_ortu }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Alamat</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>: {{ $dt->alamat }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Status</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>:
                                            @if ($dt->status == 2)
                                                <span class="badge rounded-pill bg-success">Receive</span>
                                            @elseif($dt->status == 3)
                                                <span class="badge rounded-pill bg-danger">Reject</span>
                                            @else
                                                <span class="badge rounded-pill bg-warning">Waiting</span>
                                            @endif
                                        </span>
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
