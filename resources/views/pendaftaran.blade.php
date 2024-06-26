<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Cirebon Inline Skate</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets_admin/img/logo/cis.png') }}" />
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
        background-color: #f5f5f9;
      }
      .container {
        width: 80%;
        margin: 3% auto;
        display: flex;
        height: 623px;
        box-shadow: 0 12px 18px rgba(54, 176, 138, 0.005);
        border-radius: 6px;
        background: #fff;
      }
      .login-link {
        background-color: #696cff;
        background-image: url("bg-shapes.svg");
        background-position: bottom left;
        background-repeat: no-repeat;
        width: 30%;
        padding: 3%;
      }
      .signup-form-container {
        width: 70%;
        padding: 3% 0;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .logo {
        font-weight: 600;
        color: #fff;
      }
      .side-big-heading {
        font-weight: 800;
        color: #fff;
        font-size: 1.7rem;
        margin: 46% 0 5%;
      }
      .primary-bg-text {
        color: #eff0ff;
        font-weight: 500;
        text-align: center;
      }
      a.loginbtn {
        text-decoration: none;
        color: #fff;
        width: 70%;
        font-weight: 500;
        display: inline-block;
        margin: 7% 15%;
        text-align: center;
        border: 2px solid #eff0ff;
        border-radius: 24px;
        padding: 3% 0;
      }
      a.loginbtn:hover {
        color: #696cff;
        background-color: #fff;
      }
      .big-heading {
        font-weight: 900;
        font-size: 2rem;
        color: #696cff;
      }
      .social-media-platform {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .social-media-platform a {
        color: #1a1d86;
        text-decoration: none;
        border-radius: 50%;
        display: inline-flex;
        border: 1px solid #e0e3e2;
        margin: 12%;
        padding: 13%;
      }
      .progress-bar {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 4% 0;
        width: 70%;
      }
      .progress-bar .stage {
        width: 30%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      .progress-bar .tool-tip {
        color: #1a1d86;
        font-weight: 600;
      }
      .stageno {
        margin: 6% 0;
        padding: 2% 7%;
        border-radius: 50%;
        background-color: #f5f5f9;
      }
      .button-container {
        display: flex;
        align-items: center;
        margin: 4% 0;
      }
      .text-fields {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        padding: 2%;
        margin: 0 2%;
        width: 46%;
        border-radius: 4px;
        color: #84848d;
      }
      input {
        border: none;
        outline: none;
        background: inherit;
        color: #84848d;
        width: 200%;
        margin-left: 4%;
        font-size: 1rem;
      }
      .signup-form-content {
        width: 100%;
        padding: 0 3%;
      }
      .signup-form-content .stage1-content,
      .signup-form-content .stage2-content,
      .signup-form-content .stage3-content {
        margin-top: 50px;
      }

      .signup-form-content .stage3-content .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      ::-webkit-datetime-edit-month-field,
      ::-webkit-datetime-edit-day-field,
      ::-webkit-datetime-edit-year-field,
      input::placeholder {
        background-color: #fff;
        color: #84848d;
      }
      input[type="date"]::-webkit-calendar-picker-indicator {
        color: rgba(0, 0, 0, 0);
        opacity: 1;
        display: block;
        background: url("bx-cake.svg") no-repeat;
        height: 18px;
        width: 18px;
      }
      /* .text-fields.fname:after{
          content: 'First name';
          background-color: #fff;
          position: relative;
          padding: 0 4%;
          left: -210px;
          width: 334px;
          color: #696cff;
          top: -33px;
      } */
      /* .text-fields.lname:after{
          content: 'Last name';
          background-color: #fff;
          position: relative;
          padding: 0 4%;
          left: -210px;
          width: 302px;
          color: #696cff;
          top: -33px;
      } */
      /* .text-fields.dob:after{
          content: 'Date of birth';
          background-color: #fff;
          position: relative;
          padding: 0 4%;
          left: -205px;
          width: 342px;
          color: #696cff;
          top: -33px;
      } */
      .gender-selection {
        display: flex;
        align-items: center;
        margin-left: 3%;
        width: 40%;
      }
      .field-heading {
        color: #696cff;
        width: 20%;
        margin-right: 25px;
      }
      .gender-selection label {
        margin: 0 5%;
        display: flex;
        align-items: center;
        color: #84848d;
        width: 25%;
      }
      input[type="radio"] {
        accent-color: #696cff;
        margin-right: 6%;
      }
      .pagination-btns {
        display: flex;
        justify-content: center;
        margin: 3% 0;
        padding: 0 4%;
      }
      .nextPage,
      .previousPage {
        background-color: #8789ff;
        color: #fff;
        width: 45%;
        cursor: pointer;
        padding: 2%;
        font-weight: 500;
        font-size: 1rem;
        border-radius: 4px;
        border: none;
        outline: none;
      }
      .nextPage:hover,
      .previousPage:hover {
        background-color: #696cff;
      }
      /* .text-fields.phone:after {
        content: "Phone number";
        background-color: #fff;
        position: relative;
        padding: 0 4%;
        left: -187px;
        width: 492px;
        color: #696cff;
        top: -33px;
      } */
      /* .text-fields.email:after {
        content: "Email Id";
        background-color: #fff;
        position: relative;
        padding: 0 4%;
        left: -187px;
        width: 388px;
        color: #696cff;
        top: -33px;
      } */
      /* .text-fields.password:after,
      .text-fields.confirmpassword:after {
        content: "Enter Password";
        background-color: #fff;
        position: relative;
        padding: 0 4%;
        left: -182px;
        width: 541px;
        color: #696cff;
        top: -33px;
      }
      .text-fields.text-fields.confirmpassword:after {
        content: "Confirm Password";
        width: 748px;
        left: -153px;
      } */
      .tc-container input {
        width: 4%;
        margin-left: 4%;
        accent-color: #696cff;
      }
      .tc a {
        text-decoration: none;
        color: #696cff;
      }
      label.tc {
        margin-left: 4%;
      }
      .login-form-contents {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .login-form-contents .text-fields {
        margin: 3% 2%;
        width: 70%;
        padding: 3%;
      }
      .login-form-contents .text-fields.email:after {
        left: -323px;
      }
      .login-form-contents .text-fields.password:after {
        left: -294px;
      }

    </style>
</head>
<body>
    <div class="container">
      <div class="login-link">
        <div class="logo">
          <i class="bx bx-pencil"></i>
          <span class="text">Logo name</span>
        </div>
        <p class="side-big-heading">Already a member ?</p>
        <p class="primary-bg-text">To keep track on your dashboard please login with your personal info</p>
        <a href="login.html" class="loginbtn">Login</a>
      </div>
      <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data" class="signup-form-container">
        @csrf
        <p class="big-heading">Registration</p>
        <div class="progress-bar">
          <div class="stage">
            <p class="tool-tip">Personal info</p>
            <p class="stageno stageno-1">1</p>
          </div>
          <div class="stage">
            <p class="tool-tip">Parent info</p>
            <p class="stageno stageno-2">2</p>
          </div>
          <div class="stage">
            <p class="tool-tip">Payment</p>
            <p class="stageno stageno-3">3</p>
          </div>
        </div>
        <div class="signup-form-content">
          <div class="stage1-content">
            <div class="button-container">
              <div class="text-fields fname">
                <label for="fname"><i class="bx bx-user"></i></label>
                <input type="text" name="nama_anak" id="fname" placeholder="Enter your name" />
              </div>
              <div class="text-fields lname">
                <label for="lname"><i class="bx bxs-school"></i></label>
                <input type="text" name="asal_sekolah" id="lname" placeholder="Enter your school" />
              </div>
            </div>
            <div class="button-container">
              <div class="text-fields dob">
                <input type="date" name="tanggal_lahir" id="dob" />
              </div>
              <div class="gender-selection">
                <p class="field-heading">Gender</p>
                <label for="male"> <input type="radio" name="jenis_kelamin" id="male" value="Laki-laki" />Male </label>
                <label for="female"><input type="radio" name="jenis_kelamin" id="female" value="Perempuan" />Female</label>
              </div>
            </div>
            <div class="button-container">
              <div class="text-fields fname">
                <label for="fname"><i class="bx bxl-instagram"></i></label>
                <input type="text" name="ig_anak" id="fname" placeholder="Enter your instagram" />
              </div>
            </div>
            <div class="pagination-btns">
              <input type="button" value="Next" class="nextPage stagebtn1b" onclick="stage1to2()" />
            </div>
          </div>

          <div class="stage2-content">
            <div class="button-container">
              <div class="text-fields fname">
                <label for="fname"><i class="bx bx-user"></i></label>
                <input type="text" name="nama_ortu" id="fname" placeholder="Enter your name" />
              </div>
              <div class="text-fields phone">
                <label for="phone"><i class="bx bx-phone"></i></label>
                <input type="text" name="wa_ortu" id="phone" placeholder="Enter your phone number" />
              </div>
            </div>
            <div class="button-container">
              <div class="text-fields fname">
                <label for="fname"><i class="bx bxl-instagram"></i></label>
                <input type="text" name="ig_ortu" id="fname" placeholder="Enter your instagram" />
              </div>
              <div class="text-fields fname">
                <label for="fname"><i class="bx bx-map"></i></label>
                <input type="text" name="alamat" id="fname" placeholder="Enter your address" />
              </div>
            </div>
            <div class="pagination-btns">
              <input type="button" value="Previous" class="previousPage stagebtn2a" onclick="stage2to1()" />
              <input type="button" value="Next" class="nextPage stagebtn2b" onclick="stage2to3()" />
            </div>
          </div>

          <div class="stage3-content">
            <div class="button-container">
              <div class="text-fields fname">
                <!-- <label for="fname"><i class="bx bxl-instagram"></i></label> -->
                <input type="file" name="bukti_pembayaran" id="fname" />
              </div>
            </div>
            <div class="pagination-btns">
              <input type="button" value="Previous" class="previousPage stagebtn3a" onclick="stage3to2()" />
              <button type="submit" class="nextPage stagebtn3b">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <script>
      let signupConent = document.querySelector(".signup-form-container"),
        stagebtn1b = document.querySelector(".stagebtn1b"),
        stagebtn2a = document.querySelector(".stagebtn2a"),
        stagebtn2b = document.querySelector(".stagebtn2b"),
        stagebtn3a = document.querySelector(".stagebtn3a"),
        stagebtn3b = document.querySelector(".stagebtn3b"),
        signupContent1 = document.querySelector(".stage1-content"),
        signupContent2 = document.querySelector(".stage2-content"),
        signupContent3 = document.querySelector(".stage3-content");

      signupContent2.style.display = "none";
      signupContent3.style.display = "none";

      function stage1to2() {
        signupContent1.style.display = "none";
        signupContent3.style.display = "none";
        signupContent2.style.display = "block";
        document.querySelector(".stageno-1").innerText = "✔";
        document.querySelector(".stageno-1").style.backgroundColor = "#52ec61";
        document.querySelector(".stageno-1").style.color = "#fff";
      }
      function stage2to1() {
        signupContent1.style.display = "block";
        signupContent3.style.display = "none";
        signupContent2.style.display = "none";
      }
      function stage2to3() {
        signupContent1.style.display = "none";
        signupContent3.style.display = "block";
        signupContent2.style.display = "none";
        document.querySelector(".stageno-2").innerText = "✔";
        document.querySelector(".stageno-2").style.backgroundColor = "#52ec61";
        document.querySelector(".stageno-2").style.color = "#fff";
      }
      function stage3to2() {
        signupContent1.style.display = "none";
        signupContent3.style.display = "none";
        signupContent2.style.display = "block";
      }
    </script>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </body>
</html>