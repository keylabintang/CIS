<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Cirebon Inline Skate" />
    <meta name="author" content="@keyla & @firli" />
    <title>Cirebon Inline Skate</title>

    <!-- Icon Tabs -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets_landing/images/logo/logo-tab.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets_landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets_landing/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_landing/css/templatemo-onix-digital.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_landing/css/animated.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_landing/css/owl.css') }}" />
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
                <img src="{{ asset('assets_landing/images/logo/logo-cis.png') }}" alt="logo" fetchpriority="high" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="#top" class="active">Home</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#tentang-kami">Tentang Kami</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#prestasi">Prestasi</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#kelas">Kelas</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#pelatih">Pelatih</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#kontak-kami">Kontak Kami</a>
                </li>
                <li class="scroll-to-section">
                  <a href="{{ route('login') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="mx-1"><path d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" /></svg>
                    Login
                  </a>
                </li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner wow fadeInUp" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 align-self-center">
            <div class="owl-carousel owl-banner">
              <div class="item header-text">
                <h6>Welcome to</h6>
                <h2>Cirebon <em>Inline</em> <span>Skate</span> Club</h2>
                <p>Salah Satu Club Sepaturoda di Indonesia yang Berdomisili di Cirebon. Ayo Gabung Bersama Kami!</p>
                <div class="down-buttons">
                  <div class="main-blue-button">
                    <a href="/pendaftaranMember">Daftar Sekarang!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 align-self-end d-flex justify-content-end banner">
            <img src="{{ asset('assets_landing/images/banner/roller_skating.png') }}" alt="banner" class="img-banner" fetchpriority="high" />
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Tentang Kami Area Start ***** -->
    <div id="tentang-kami" class="tentang-kami section">
      <div class="tentang-kami-dec">
        <img src="{{ asset('assets_landing/images/portfolio-left-dec.jpg') }}" alt="left-bg" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="section-heading">
              <h2>Cirebon <em>Inline</em> <span>Skate</span> itu apa sih?</h2>
              <p>Jadi, Cirebon Inline Skate merupakan salah satu Club Sepaturoda di Indonesia yang berdomisili di Cirebon Jawa Barat. Cirebon Inline Skate di dirikan di Cirebon, 11 Januari 2016. Saat ini Cirebon Inline Skate memiliki 2 kelas regular dan 2 kelas penjurusan. Cirebon Inline Skate memiliki 100 member aktif dan 9 pelatih. Cirebon Inline Skate menerima member baru untuk sekedar bermain maupun untuk berprestasi.</p>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="fact-item text-center">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="{{ asset('assets_landing/images/class.svg') }}" alt="icon" />
                    </div>
                    <div class="count-digit">4</div>
                    <div class="count-title">Kelas</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="{{ asset('assets_landing/images/coach.svg') }}" alt="icon" />
                    </div>
                    <div class="count-digit">9</div>
                    <div class="count-title">Pelatih</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="fact-item">
                  <div class="count-area-content`text-center">
                    <div class="icon">
                      <img src="{{ asset('assets_landing/images/skate.svg') }}" alt="icon" />
                    </div>
                    <div class="count-digit">100</div>
                    <div class="count-title">Member Aktif</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="section-visimisi">
              <h3>Visi <em>&amp;</em> Misi</h3>
              <p class="visi">Membentuk atlet-atlet sepatu roda yang berkualitas, berkarakter, bermental kuat, berjiwa sportif dalam suasana kekeluargaan dalam rangka meraih prestasi yang tinggi.</p>
              <div class="misi">
                <ul class="list-group">
                  <li class="list-group-item"><i class="fa fa-check icon-check"></i> Memajukan olahraga sepatu roda sebagai jalur prestasi atlet di Kota Cirebon</li>
                  <li class="list-group-item"><i class="fa fa-check icon-check"></i> Mencari dan membina bibit- bibit atlet</li>
                  <li class="list-group-item"><i class="fa fa-check icon-check"></i> Merancang dan Melaksanakan program pembinaan atlet secara berkesinambungan, efektif, dan efisien</li>
                  <li class="list-group-item"><i class="fa fa-check icon-check"></i> Membangun kesadaran dan keterlibatan masyarakat dalam berbagai program peningkatan prestasi olahraga sepaturoda</li>
                  <li class="list-group-item"><i class="fa fa-check icon-check"></i> Menata organisasi secara profesional</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Tentang Kami Area End ***** -->

    <!-- ***** Prestasi Area Start ***** -->
    <div id="prestasi" class="prestasi section">
      <div class="services-left-dec">
        <img src="{{ asset('assets_landing/images/services-right-dec.png') }}" alt="right-bg" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
              <h2>Beberapa <em>Prestasi</em> Yang <span>Kami</span> Dapatkan</h2>
              <span>Prestasi Kami</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel owl-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              @foreach($prestasi as $prs)
              <div class="item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <div class="img-offset">
                    <img src="{{ asset('assets_landing/images/awards.svg') }}" alt="icon awards" />
                  </div>
                  <div class="img-thumb">
                    <img src="{{ asset('images/'.$prs->foto) }}" alt="foto profil" />
                  </div>
                  <h4>{{ $prs->nama }}</h4>
                  <ol class="list-medal">
                    {{ $prs->keterangan }}
                  </ol>
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Prestasi Area End ***** -->

    <!-- ***** Kelas Area Start ***** -->
    <div id="kelas" class="kelas section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="section-title">
              <h2>Ini <em>Kelas</em> Yang <span>Kami</span> Miliki</h2>
              <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
            </div>

            <div class="row my-5">
              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img src="{{ asset('assets_landing/images/skate-2.svg') }}" alt="icon" />
                  </div>
                  <h3>Warrior</h3>
                  <p>Warrior adalah kelas di mana anak anak mempelajari fundamental bersepatu roda</p>
                  <div class="jadwal">
                    <div class="row">
                      <div class="accordion accordion-flush" id="accordionFlushWarrior">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWarrior" aria-expanded="false" aria-controls="collapseWarrior">
                              <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" fill="#3562d7" viewBox="0 0 512 512" class="mx-1"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" /></svg>
                              Jadwal
                            </button>
                          </h2>
                          <div id="collapseWarrior" class="accordion-collapse collapse" data-bs-parent="#accordionFlushWarrior">
                            <div class="accordion-body">
                              Sabtu 13.00-15.00 <br />
                              Minggu 13.00-15.00
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img src="{{ asset('assets_landing/images/skate-2.svg') }}" alt="icon" />
                  </div>
                  <h3>Elite</h3>
                  <p>Warrior adalah kelas di mana anak anak mempelajari fundamental bersepatu roda</p>
                  <div class="jadwal">
                    <div class="row">
                      <div class="accordion accordion-flush" id="accordionFlushElite">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseElite" aria-expanded="false" aria-controls="collapseElite">
                              <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" fill="#3562d7" viewBox="0 0 512 512" class="mx-1"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" /></svg>
                              Jadwal
                            </button>
                          </h2>
                          <div id="collapseElite" class="accordion-collapse collapse" data-bs-parent="#accordionFlushElite">
                            <div class="accordion-body">
                              Jum'at 13.00-15.00 <br />
                              Minggu 13.00-15.00
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img src="{{ asset('assets_landing/images/skate-2.svg') }}" alt="icon" />
                  </div>
                  <h3>Speed</h3>
                  <p>Warrior adalah kelas di mana anak anak mempelajari fundamental bersepatu roda</p>
                  <div class="jadwal">
                    <div class="row">
                      <div class="accordion accordion-flush" id="accordionFlushSpeed">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSpeed" aria-expanded="false" aria-controls="collapseSpeed">
                              <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" fill="#3562d7" viewBox="0 0 512 512" class="mx-1"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" /></svg>
                              Jadwal
                            </button>
                          </h2>
                          <div id="collapseSpeed" class="accordion-collapse collapse" data-bs-parent="#accordionFlushSpeed">
                            <div class="accordion-body">
                              Jum'at 13.00-15.00 <br />
                              Sabtu 13.00-15.00 <br />
                              Minggu 13.00-15.00
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img src="{{ asset('assets_landing/images/skate-2.svg') }}" alt="icon" />
                  </div>
                  <h3>Freestyle</h3>
                  <p>Warrior adalah kelas di mana anak anak mempelajari fundamental bersepatu roda</p>
                  <div class="jadwal">
                    <div class="row">
                      <div class="accordion accordion-flush" id="accordionFlushFreestyle">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFreestyle" aria-expanded="false" aria-controls="collapseFreestyle">
                              <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" fill="#3562d7" viewBox="0 0 512 512" class="mx-1"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" /></svg>
                              Jadwal
                            </button>
                          </h2>
                          <div id="collapseFreestyle" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFreestyle">
                            <div class="accordion-body">
                              Jum'at 13.00-15.00 <br />
                              Sabtu 13.00-15.00 <br />
                              Minggu 13.00-15.00
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 kelas-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="img-wrap">
              <img src="{{ asset('assets_landing/images/kelas/section-kelas.jpg') }}" alt="image" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Kelas Area End ***** -->

    <!-- Pelatih Section Start -->
    <div id="pelatih" class="pelatih section">
      <div class="portfolio-left-dec">
        <img src="{{ asset('assets_landing/images/portfolio-left-dec.png') }}" alt="left-bg" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
              <h2>Ini <em>Pelatih</em> Kami Yang Sudah <span>Berpengalaman</span></h2>
              <span>Pelatih Kami</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel owl-portfolio wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              @foreach ($pelatih as $pl)
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('images/'.$pl->foto) }}" alt="profil coach" />
                  <div class="hover-effect">
                    <div class="inner-content">
                      <h4>{{ $pl->nama }}</h4>
                      <h5>~ {{ $pl->keterangan }}</h5>
                      <h6><a href="#">@ {{ $pl->ig }}</a></h6>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pelatih Section End -->

    <div class="subscribe">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-lg-10 offset-lg-1">
                  <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">Ayo Daftarkan Diri Anda Sekarang!</h2>
                  <div class="main-blue-button d-flex justify-content-center pt-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <a href="/pendaftaran">Daftar Sekarang!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ***** FAQ Area Start ***** -->
    <div id="faq" class="faq section">
      <div class="faq-right-dec">
        <img src="{{ asset('assets_landing/images/tables-right-dec.png') }}" alt="right-bg" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
              <h2><em>Frequently </em>Asked <span>Questions</span></h2>
              <span>FAQ</span>
            </div>
          </div>
        </div>
        <div class="row justify-content-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="col-md-11">
            <div class="row g-3 gy-md-4 gx-md-5">
              <div class="col-lg-6">
                <div class="box card p-4">
                  <div class="d-flex">
                    <div class="text-muted me-4">
                      <svg class="bi bi-question-circle-fill" fill="currentColor" height="32" viewbox="0 0 16 16" width="32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                      </svg>
                    </div>
                    <div class="box-text">
                      <h5 class="mb-2 mb-lg-4">Lorem ipsum dolor adipisicing ?</h5>
                      <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nihil. Praesentium nostrum fugiat id dolor.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="box card p-4">
                  <div class="d-flex">
                    <div class="text-muted me-4">
                      <svg class="bi bi-question-circle-fill" fill="currentColor" height="32" viewbox="0 0 16 16" width="32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                      </svg>
                    </div>
                    <div class="box-text">
                      <h5 class="mb-2 mb-lg-4">Lorem ipsum dolor adipisicing ?</h5>
                      <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nihil. Praesentium nostrum fugiat id dolor.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="box card p-4">
                  <div class="d-flex">
                    <div class="text-muted me-4">
                      <svg class="bi bi-question-circle-fill" fill="currentColor" height="32" viewbox="0 0 16 16" width="32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                      </svg>
                    </div>
                    <div class="box-text">
                      <h5 class="mb-2 mb-lg-4">Lorem ipsum dolor adipisicing ?</h5>
                      <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nihil. Praesentium nostrum fugiat id dolor.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="box card p-4">
                  <div class="d-flex">
                    <div class="text-muted me-4">
                      <svg class="bi bi-question-circle-fill" fill="currentColor" height="32" viewbox="0 0 16 16" width="32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                      </svg>
                    </div>
                    <div class="box-text">
                      <h5 class="mb-2 mb-lg-4">Lorem ipsum dolor adipisicing ?</h5>
                      <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nihil. Praesentium nostrum fugiat id dolor.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** FAQ Area End ***** -->

    <!-- ***** Kontak Kami Area Start ***** -->
  
    <div id="kontak-kami" class="kontak section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 offset-lg-3">
            <div class="section-heading">
              <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Bisa Hubungi <em>Kontak</em> <span>Kami</span> Di Bawah Ini</h2>
              <div class="row justify-content-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" id="map">
                <iframe title="Living Plaza Cirebon" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.295639635649!2d108.53865760959792!3d-6.7337409932343055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1df3f489b31b%3A0xf4e4679358864c50!2sLiving%20Plaza%20Cirebon!5e0!3m2!1sid!2sid!4v1697901277879!5m2!1sid!2sid" width="100%" height="360px" style="border: 0" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="info mt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve" class="">
                <circle r="256" cx="256" cy="256" fill="#3562d7" shape="circle"></circle>
                <g transform="matrix(0.5,0,0,0.5,128,127.99983978271484)"><path d="M256 0C153.755 0 70.573 83.182 70.573 185.426c0 126.888 165.939 313.167 173.004 321.035 6.636 7.391 18.222 7.378 24.846 0 7.065-7.868 173.004-194.147 173.004-321.035C441.425 83.182 358.244 0 256 0zm0 278.719c-51.442 0-93.292-41.851-93.292-93.293S204.559 92.134 256 92.134s93.291 41.851 93.291 93.293-41.85 93.292-93.291 93.292z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path></g>
              </svg>
              <a href="#">Tempat Latihan<br />Area Parkir Living Plaza</a>
            </span>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0" viewBox="0 0 60 60" style="enable-background: new 0 0 512 512" xml:space="preserve" class="">
                <circle r="30" cx="30" cy="30" fill="#3562d7" shape="circle"></circle>
                <g transform="matrix(0.5,0,0,0.5,15,15)">
                  <path d="M30 20.83c-5.06 0-9.17 4.11-9.17 9.17s4.11 9.18 9.17 9.18 9.18-4.12 9.18-9.18-4.12-9.17-9.18-9.17z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                  <path d="M43.84 5H16.16C10.01 5 5 10.01 5 16.16v27.68C5 50 10.01 55 16.16 55h27.68C50 55 55 50 55 43.84V16.16C55 10.01 50 5 43.84 5zM30 46.2c-8.93 0-16.2-7.27-16.2-16.2S21.07 13.81 30 13.81 46.2 21.07 46.2 30 38.93 46.2 30 46.2zm16.54-29.45c-1.89 0-3.43-1.53-3.43-3.42s1.54-3.43 3.43-3.43 3.43 1.54 3.43 3.43-1.54 3.42-3.43 3.42z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                </g>
              </svg>
              <a href="#">Instagram<br />@sepaturodacirebon</a>
            </span>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve" class="">
                <circle r="256" cx="256" cy="256" fill="#3562d7" shape="circle"></circle>
                <g transform="matrix(0.5,0,0,0.5,127.99598407745361,127.9974902421236)"><path d="M480.32 128.39c-29.22 0-56.18-9.68-77.83-26.01-24.83-18.72-42.67-46.18-48.97-77.83A129.78 129.78 0 0 1 351.04.39h-83.47v228.08l-.1 124.93c0 33.4-21.75 61.72-51.9 71.68a75.905 75.905 0 0 1-28.04 3.72c-12.56-.69-24.33-4.48-34.56-10.6-21.77-13.02-36.53-36.64-36.93-63.66-.63-42.23 33.51-76.66 75.71-76.66 8.33 0 16.33 1.36 23.82 3.83v-84.75c-7.9-1.17-15.94-1.78-24.07-1.78-46.19 0-89.39 19.2-120.27 53.79-23.34 26.14-37.34 59.49-39.5 94.46-2.83 45.94 13.98 89.61 46.58 121.83 4.79 4.73 9.82 9.12 15.08 13.17 27.95 21.51 62.12 33.17 98.11 33.17 8.13 0 16.17-.6 24.07-1.77 33.62-4.98 64.64-20.37 89.12-44.57 30.08-29.73 46.7-69.2 46.88-111.21l-.43-186.56a210.864 210.864 0 0 0 46.88 27.34c26.19 11.05 53.96 16.65 82.54 16.64v-83.1c.02.02-.22.02-.24.02z" fill="#ffffff" opacity="1" data-original="#000000"></path></g>
              </svg>
              <a href="#">Tiktok<br />Sepaturoda Cirebon</a>
            </span>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0" viewBox="0 0 310 310" style="enable-background: new 0 0 512 512" xml:space="preserve" class="">
                <circle r="155" cx="155" cy="155" fill="#3562d7" shape="circle"></circle>
                <g transform="matrix(0.5,0,0,0.5,77.5,77.50000190734863)"><path d="M297.917 64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359 0-61.369 5.776-72.517 19.938C0 79.663 0 100.008 0 128.166v53.669c0 54.551 12.896 82.248 83.386 82.248h143.226c34.216 0 53.176-4.788 65.442-16.527C304.633 235.518 310 215.863 310 181.835v-53.669c0-29.695-.841-50.16-12.083-63.521zm-98.896 97.765-65.038 33.991a9.997 9.997 0 0 1-14.632-8.863v-67.764a10 10 0 0 1 14.609-8.874l65.038 33.772a10 10 0 0 1 .023 17.738z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path></g>
              </svg>
              <a href="#">Youtube<br />Sepaturoda Cirebon</a>
            </span>
          </div>
        </div>
      </div>
      <div class="contact-left-dec">
        <img src="{{ asset('assets_landing/images/videos-left-dec.png') }}" alt="left-bg" />
      </div>
    </div>
    <!-- ***** Kontak Kami Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <div class="footer-dec">
      <img src="{{ asset('assets_landing/images/footer-dec.png') }}" alt="image footer" />
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="about footer-item">
              <div class="logo">
                <a href="#"><img src="{{ asset('assets_landing/images/logo/logo-cis.png') }}" alt="logo" /></a>
              </div>
              <span> Sosial Media </span>
              <ul>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0" viewBox="0 0 60 60" style="enable-background: new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path d="M30 20.83c-5.06 0-9.17 4.11-9.17 9.17s4.11 9.18 9.17 9.18 9.18-4.12 9.18-9.18-4.12-9.17-9.18-9.17z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                        <path d="M43.84 5H16.16C10.01 5 5 10.01 5 16.16v27.68C5 50 10.01 55 16.16 55h27.68C50 55 55 50 55 43.84V16.16C55 10.01 50 5 43.84 5zM30 46.2c-8.93 0-16.2-7.27-16.2-16.2S21.07 13.81 30 13.81 46.2 21.07 46.2 30 38.93 46.2 30 46.2zm16.54-29.45c-1.89 0-3.43-1.53-3.43-3.42s1.54-3.43 3.43-3.43 3.43 1.54 3.43 3.43-1.54 3.42-3.43 3.42z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                      </g>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#"
                    ><svg xmlns="http://www.w3.org/2000/svg" width="15px" viewBox="0 0 448 512"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" fill="#fff" /></svg>
                  </a>
                </li>
                <li>
                  <a href="#"
                    ><svg xmlns="http://www.w3.org/2000/svg" width="17px" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" fill="#fff" /></svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="community footer-item">
              <h4>Clean Up Sepaturoda</h4>
              <ul>
                <li><span>Vega – 08973310019</span></li>
                <li><span>Ridwan – 0895357611633</span></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="services footer-item">
              <h4>Pembelian Sepaturoda</h4>
              <ul>
                <li><span>Omet – 087732776450</span></li>
                <li><span>Vega – 08973310019</span></li>
                <li><span> Ridwan – 0895357611633</span></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="subscribe-newsletters footer-item">
              <h4>Pendaftaran Member Club</h4>
              <p>Periode pendaftaran 01-09-2023 sampai 01-01-2024</p>
              <p class="mt-1">Omet – 087732776450</p>
              <p>Vega – 08973310019</p>
              <div class="main-blue-button mt-3">
                <a href="#login">Daftar Sekarang!</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="copyright">
              <p>Copyright © 2023 Cirebon Inline Skate.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- Scripts -->
    <script src="{{ asset('assets_landing/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets_landing/js/animation.js') }}"></script>
    <script src="{{ asset('assets_landing/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets_landing/js/custom.js') }}"></script>

    <script>
      // Acc
      $(document).on("click", ".naccs .menu div", function () {
        var numberIndex = $(this).index();

        if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
      });
    </script>
  </body>
</html>
