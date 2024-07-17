@php
  \Carbon\Carbon::setLocale('id'); 
@endphp

<!-- Modal -->
<div class="modal fade" id="viewdetail-{{ $dt->id_laporan }}" tabindex="-1" style="display: none;" aria-hidden="true">
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
                                        <span>: {{ $dt->nama }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item list-group-item-action mb-1">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span>Tanggal</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <span>: {{ $dt->bulan }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
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
                        </div>
                        <div class="list-group list-group-flush">
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
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>