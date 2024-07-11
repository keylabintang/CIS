
@extends('admin.layouts.main')

@section('content-admin')
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6 col-12 mb-5">
            <a href="{{ url('/admin/pendaftaran') }}" class="card cursor-pointer">              
              <div class="card-body text-center">
                <div class="card-title mb-3">
                  <div class="avatar flex-shrink-0 mx-auto">
                    <div class="icon icon-lg">
                      <i class="menu-icon tf-icons bx bx-folder" style="font-size: 38px;"></i>
                    </div>
                  </div>
                </div>
                <h4 class="card-title mb-2">Data Pendaftaran</h4>
              </div>
            </a>
          </div>
          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6 col-12 mb-5">
            <a href="{{ url('/admin/member') }}" class="card cursor-pointer">              
              <div class="card-body text-center">
                <div class="card-title mb-3">
                  <div class="avatar flex-shrink-0 mx-auto">
                    <div class="icon icon-lg">
                      <i class="menu-icon tf-icons bx bx-user" style="font-size: 38px;"></i>
                    </div>
                  </div>
                </div>
                <h4 class="card-title mb-2">Data Member</h4>
              </div>
            </a>
          </div>
          <!-- Card 3 -->
          <div class="col-lg-4 col-md-6 col-12 mb-5">
            <a href="{{ url('/admin/jadwal') }}" class="card cursor-pointer">              
              <div class="card-body text-center">
                <div class="card-title mb-3">
                  <div class="avatar flex-shrink-0 mx-auto">
                    <div class="icon icon-lg">
                      <i class="menu-icon tf-icons bx bx-calendar" style="font-size: 38px;"></i>
                    </div>
                  </div>
                </div>
                <h4 class="card-title mb-2">Jadwal</h4>
              </div>
            </a>
          </div>
          <!-- Card 4 -->
          <div class="col-lg-4 col-md-6 col-12 mb-5">
            <a href="{{ url('/admin/program') }}" class="card cursor-pointer">              
              <div class="card-body text-center">
                <div class="card-title mb-3">
                  <div class="avatar flex-shrink-0 mx-auto">
                    <div class="icon icon-lg">
                      <i class="menu-icon tf-icons bx bx-star" style="font-size: 38px;"></i>
                    </div>
                  </div>
                </div>
                <h4 class="card-title mb-2">Program Klub</h4>
              </div>
            </a>
          </div>
          <!-- Card 5 -->
          <div class="col-lg-4 col-md-6 col-12 mb-5">
            <a href="{{ url('/admin/event') }}" class="card cursor-pointer">              
              <div class="card-body text-center">
                <div class="card-title mb-3">
                  <div class="avatar flex-shrink-0 mx-auto">
                    <div class="icon icon-lg">
                      <i class="menu-icon tf-icons bx bx-calendar-star" style="font-size: 38px;"></i>
                    </div>
                  </div>
                </div>
                <h4 class="card-title mb-2">Event</h4>
              </div>
            </a>
          </div>
          <!-- Card 6 -->
          <div class="col-lg-4 col-md-6 col-12 mb-5">
            <a href="{{ url('/admin/laporan') }}" class="card cursor-pointer">              
              <div class="card-body text-center">
                <div class="card-title mb-3">
                  <div class="avatar flex-shrink-0 mx-auto">
                    <div class="icon icon-lg">
                      <i class="menu-icon tf-icons bx bx-clipboard" style="font-size: 38px;"></i>
                    </div>
                  </div>
                </div>
                <h4 class="card-title mb-2">Monthly Report</h4>
              </div>
            </a>
          </div>
          <!-- Card 7 -->
          <div class="col-lg-4 col-md-6 col-12 mb-5">
            <a href="{{ url('/admin/biaya') }}" class="card cursor-pointer">              
              <div class="card-body text-center">
                <div class="card-title mb-3">
                  <div class="avatar flex-shrink-0 mx-auto">
                    <div class="icon icon-lg">
                      <i class="menu-icon tf-icons bx bx-money" style="font-size: 38px;"></i>
                    </div>
                  </div>
                </div>
                <h4 class="card-title mb-2">Keuangan</h4>
              </div>
            </a>
          </div>
          <!-- Card 8 -->
          <div class="col-lg-4 col-md-6 col-12 mb-5">
            <a href="{{ url('/admin/pelatih') }}" class="card cursor-pointer">              
              <div class="card-body text-center">
                <div class="card-title mb-3">
                  <div class="avatar flex-shrink-0 mx-auto">
                    <div class="icon icon-lg">
                      <i class="menu-icon tf-icons bx bx-user-plus" style="font-size: 38px;"></i>
                    </div>
                  </div>
                </div>
                <h4 class="card-title mb-2">Data Pelatih</h4>
              </div>
            </a>
          </div>
          <!-- Card 9 -->
          <div class="col-lg-4 col-md-6 col-12 mb-5">
            <a href="{{ url('/admin/prestasi') }}" class="card cursor-pointer">              
              <div class="card-body text-center">
                <div class="card-title mb-3">
                  <div class="avatar flex-shrink-0 mx-auto">
                    <div class="icon icon-lg">
                      <i class="menu-icon tf-icons bx bx-medal" style="font-size: 38px;"></i>
                    </div>
                  </div>
                </div>
                <h4 class="card-title mb-2">Data Prestasi</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
