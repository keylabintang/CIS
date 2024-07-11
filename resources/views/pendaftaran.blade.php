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
      width: 100%;
      height: 100vh;
      background-color: #f5f5f9;
      margin: 0;
    }

    .container {
      width: 80%;
      max-width: 800px;
      box-shadow: 0 12px 18px rgba(54, 176, 138, 0.1);
      border-radius: 6px;
      background: #fff;
      padding: 20px;
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
      color: #696cff;
      margin-bottom: 20px;
      margin-top: 150px;
    }

    .text-fields {
      display: flex;
      align-items: center;
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px 0;
      width: 100%;
      border-radius: 4px;
      color: #84848d;
    }

    input {
      border: none;
      outline: none;
      background: inherit;
      color: #84848d;
      width: 100%;
      margin-left: 15px;
      font-size: 1rem;
    }

    .button-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .submit-btn {
      background-color: #696cff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
    }

    .submit-btn:hover {
      background-color: #575ed8;
    }

    .gender-container {
      display: contents;
      align-items: center;
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
    }
  </style>
</head>
<body>
  <div class="container">
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <form action="{{ route('pendaftaranMember.store') }}" method="POST" enctype="multipart/form-data" class="signup-form-container">
      @csrf
      <h2 class="big-heading">Pendaftaran Member Baru</h2>
      <a href="" class="app-brand-link">
        <img src="{{ asset('assets_admin/img/logo/logo-cis.png') }}" class="logo" alt="logo" height="70" width="250"/>
      </a>
      <br>
      <div class="text-fields">
        <label for="nama_anak"><i class="bx bx-user"></i></label>
        <input type="text" name="nama_anak" id="nama_anak" placeholder="Masukan Nama" required />
      </div>
      <div class="text-fields">
        <label for="asal_sekolah"><i class="bx bxs-school"></i></label>
        <input type="text" name="asal_sekolah" id="asal_sekolah" placeholder="Masukan Asal Sekolah" required />
      </div>
      <div class="text-fields">
        <label for="tanggal_lahir"><i class="bx bx-calendar"></i></label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="YYYY-MM-DD" required />
      </div>
      <div class="text-fields">
        <label for="jenis_kelamin"><i class="bx bx-male-female"></i></label>
        <div class="gender-container">
          <label class="gender-label">
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" required>
            Laki-laki
          </label>
          <label class="gender-label">
            <input type="radio" name="jenis_kelamin" value="Perempuan" required>
            Perempuan
          </label>
        </div>
      </div>
      <div class="text-fields">
        <label for="ig_anak"><i class="bx bxl-instagram"></i></label>
        <input type="text" name="ig_anak" id="ig_anak" placeholder="Masukan Username Instagram Anak" />
      </div>
      <div class="text-fields">
        <label for="nama_ortu"><i class="bx bx-user"></i></label>
        <input type="text" name="nama_ortu" id="nama_ortu" placeholder="Masukan Nama Orang Tua" required />
      </div>
      <div class="text-fields">
        <label for="wa_ortu"><i class="bx bx-phone"></i></label>
        <input type="text" name="wa_ortu" id="wa_ortu" placeholder="Masukan Nomor Telepon Orang Tua" required />
      </div>
      <div class="text-fields">
        <label for="ig_ortu"><i class="bx bxl-instagram"></i></label>
        <input type="text" name="ig_ortu" id="ig_ortu" placeholder="Masukan Instagram Orang Tua" />
      </div>
      <div class="text-fields">
        <label for="alamat"><i class="bx bx-map"></i></label>
        <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" required />
      </div>
      <div class="text-fields">
        <label for="bukti_pembayaran"><i class="bx bx-upload"></i></label>
        <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" required />
      </div>
      <div class="button-container">
        <button type="submit" class="submit-btn">Daftar</button>
      </div>
    </form>
  </div>
</body>
</html>
