<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Cirebon Inline Skate</title>
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="{{ asset('assets_admin/img/logo/logo-tab.png') }}" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #d2dbf2;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 100%;
      max-width: 600px;
      box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
      background: #fff;
      padding: 20px;
      margin: 2rem auto;
    }

    .signup-form-container {
      width: 100%;
      padding: 3% 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .big-heading {
      font-weight: 600;
      font-size: 2rem;
      color: #88a5ef;
      margin-bottom: 20px;
    }

    .text-fields {
      display: flex;
      flex-direction: column; 
      align-items: flex-start; 
      border: 0.5px solid #ccc;
      padding: 10px;
      margin: 10px 0;
      width: 100%;
      border-radius: 4px;
      color: #84848d;
    }

    .text-fields label {
      margin-bottom: 5px; 
      font-size: 0.9rem; 
      display: flex;
      align-items: center;
    }

    .text-fields label i {
      margin-right: 5px; 
    }

    .text-fields input, 
    .text-fields select, 
    .text-fields textarea {
      width: 100%; 
      margin-top: 5px;
      padding: 10px; 
      border-radius: 4px; 
      border: 1px solid #ccc;
      font-size: 1rem; 
    }

    .text-fields textarea {
      height: 100px; 
      resize: vertical; 
    }

    .submit-btn {
      width: 150px; 
      padding: 10px; 
      border-radius: 4px; 
      font-size: 1rem; 
      background-color: #0056b3;
      color: #fff;
      border: none;
      cursor: pointer;
      margin-top: 30px;
    }

    .submit-btn:hover {
      background-color: #00acc1;
      transform: scale(1.02);
    }

    .gender-container {
      display: flex;
      justify-content: flex-start; 
      width: 100%;
    }

    .gender-label {
      display: flex;
      align-items: center;
      margin-right: 150px; 
    }

    .gender-label input {
      margin-right: 10px;
      width: 100%;
      padding: 100%;
    }

    .fee-info {
      background-color: #e0f7fa;
      border: 1px solid #00acc1;
      padding: 15px;
      margin: 20px 0;
      width: 100%;
      border-radius: 4px;
      text-align: center;
    }

    .fee-info h4 {
      font-size: 1.2rem;
      color: #007c91;
      margin-bottom: 10px;
    }

    .fee-info p {
      font-size: 13px;
      color: #004d40;
    }
    
  </style>
</head>
<body>
  <div class="container">
    @if (session('success'))
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        Swal.fire({
          title: 'Sukses!',
          text: `{{ session('success') }}`,
          icon: 'success',
          confirmButtonText: 'Ok'
        });
      </script>
    @endif
    <form action="{{ route('pendaftaranMember.store') }}" method="POST" enctype="multipart/form-data" class="signup-form-container">
      @csrf
      <h2 class="big-heading">Pendaftaran Member Baru</h2>
      <a href="" class="app-brand-link">
        <img src="{{ asset('assets_admin/img/logo/cis-2.png') }}" class="logo" alt="logo" height="70" width="250"/>
      </a>
      <br>
      <div class="text-fields">
        <label for="nama_anak"><i class="bx bx-user"></i> Nama Anak</label>
        <input type="text" class="form-control @error('nama_anak') border-danger @enderror"
              id="nama_anak" name="nama_anak" value="{{ old('nama_anak') }}" placeholder="Masukkan Nama Anak" />
          @error('nama_anak')
          <div class="form-text text-danger">
            *{{ $message }}
          </div>
          @enderror
      </div>

      <div class="text-fields">
        <label for="asal_sekolah"><i class="bx bxs-school"></i> Asal Sekolah</label>
        <input type="text" class="form-control @error('asal_sekolah') border-danger @enderror"
              id="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah') }}" placeholder="Masukkan Asal Sekolah Anak" />
          @error('asal_sekolah')
          <div class="form-text text-danger">
            *{{ $message }}
          </div>
          @enderror
      </div>

      <div class="text-fields">
        <label for="tanggal_lahir"><i class="bx bx-calendar"></i> Tanggal Lahir</label>
        <input type="date" class="form-control @error('tanggal_lahir') border-danger @enderror"
              id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" />
          @error('tanggal_lahir')
          <div class="form-text text-danger">
            *{{ $message }}
          </div>
          @enderror
      </div>

      <div class="text-fields">
        <label for="jenis_kelamin"><i class="bx bx-male-female"></i> Jenis Kelamin</label>
        <div class="gender-container">
            <label class="gender-label">
                <input type="radio" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }}> Laki-laki
            </label>
            <label class="gender-label">
                <input type="radio" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}> Perempuan
            </label>
        </div>
        @error('jenis_kelamin')
        <div class="form-text text-danger">
            *{{ $message }}
        </div>
        @enderror
    </div>
    
      <div class="text-fields">
        <label for="ig_anak"><i class="bx bxl-instagram"></i> Instagram Anak</label>
        <input type="text" class="form-control @error('ig_anak') border-danger @enderror"
              id="ig_anak" name="ig_anak" value="{{ old('ig_anak') }}" placeholder="Contoh @instagram_anak" />
          @error('ig_anak')
          <div class="form-text text-danger">
            *{{ $message }}
          </div>
          @enderror
      </div>

      <div class="text-fields">
        <label for="nama_ortu"><i class="bx bx-user"></i> Nama Orang Tua</label>
        <input type="text" class="form-control @error('nama_ortu') border-danger @enderror"
              id="nama_ortu" name="nama_ortu" value="{{ old('nama_ortu') }}" placeholder="Masukkan Nama Orang Tua" />
          @error('nama_ortu')
          <div class="form-text text-danger">
            *{{ $message }}
          </div>
          @enderror
      </div>

      <div class="text-fields">
        <label for="wa_ortu"><i class="bx bx-phone"></i> WhatsApp Orang Tua</label>
        <input type="text" class="form-control @error('wa_ortu') border-danger @enderror"
              id="wa_ortu" name="wa_ortu" value="{{ old('wa_ortu') }}" placeholder="Masukkan Nomor WhatsApp" />
          @error('wa_ortu')
          <div class="form-text text-danger">
            *{{ $message }}
          </div>
          @enderror
      </div>

      <div class="text-fields">
        <label for="ig_ortu"><i class="bx bxl-instagram"></i> Instagram Orang Tua</label>
        <input type="text" class="form-control @error('ig_ortu') border-danger @enderror"
              id="ig_ortu" name="ig_ortu" value="{{ old('ig_ortu') }}" placeholder="Contoh @instagram_ortu" />
          @error('ig_ortu')
          <div class="form-text text-danger">
            *{{ $message }}
          </div>
          @enderror
      </div>

      <div class="text-fields">
        <label for="alamat"><i class="bx bx-map"></i> Alamat</label>
        <textarea class="form-control @error('alamat') border-danger @enderror" 
                  id="alamat" name="alamat" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
        @error('alamat')
        <div class="form-text text-danger">
          *{{ $message }}
        </div>
        @enderror
      </div>

      <div class="text-fields">
        <label for="level"><i class="bx bx-level"></i> Level</label>
        <select class="form-control @error('level') border-danger @enderror"
                id="level" name="level">
          <option value="">Pilih Level</option>
          <option value="Beginner" {{ old('level') == 'Beginner' ? 'selected' : '' }}>Beginner</option>
          <option value="Intermediate" {{ old('level') == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
          <option value="Advanced" {{ old('level') == 'Advanced' ? 'selected' : '' }}>Advanced</option>
        </select>
        @error('level')
        <div class="form-text text-danger">
          *{{ $message }}
        </div>
        @enderror
      </div>

      <div class="text-fields">
        <label for="bukti_pembayaran"><i class="bx bx-image"></i> Bukti Pembayaran</label>
        <input type="file" class="form-control @error('bukti_pembayaran') border-danger @enderror"
              id="bukti_pembayaran" name="bukti_pembayaran" />
        @error('bukti_pembayaran')
        <div class="form-text text-danger">
          *{{ $message }}
        </div>
        @enderror
      </div>

      <button type="submit" class="submit-btn">Daftar</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
@if (session('success'))
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      Swal.fire({
        title: 'Sukses!',
        text: `{{ session('success') }}`,
        icon: 'success',
        confirmButtonText: 'Ok'
      }).then((result) => {
        if (result.isConfirmed) {
          // Arahkan ke halaman utama
          window.location.href = '{{ url('/') }}'; // Ganti dengan route atau URL halaman awal Anda
        }
      });
    });
  </script>
@endif
</body>
</html>
