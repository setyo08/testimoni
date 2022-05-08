@extends('layouts.home')
@section('content')
<style>
  .card-img {
    border-radius:50%; 
    height:80px; 
    width:40%; 
    border: 5px solid hsl(258, 74%, 48%); 
    position: relative; 
    top: -20px;
  }
  .btn-modif {
    background-color: hsl(258, 74%, 48%); /* Green */
    border: none;
    color: hsl(258, 0%, 100%);
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    cursor: pointer;
  }
  .btn-modif:hover{
    background-color: hsl(258, 0%, 100%);
    color:  hsl(258, 74%, 48%);
  }
  .card-container:hover *, p.text-title:hover {
    color:white;
  }
  .text-title {
    font-size: 12px;
  }

  .home9 .hero-area {
      padding: 120px 0px 120px;
  }
  </style>
</head>
  <body class="home9">
  
    <!-- Navebar Area start -->
    <header class="navigation">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="{{route('index')}}">
                  <h3 class="mt-2"><b>Feedback</b></h3>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu"
                aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ request()->is('news*') ? '/' : '#home' }}">Home</a>
                  </li>
                  @if(!request()->is('news*'))
                  <li class="nav-item">
                      <a class="nav-link" href="#testimonial-area">Ulasan</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contact">Kontak</a>
                  </li>
                  @endif
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.index') }}">Berita <span class="font-weight-bold" style="margin-left:10px;">|</span></a>
                  </li>
                  @auth
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="modal" data-target="#account">{{session()->get('user')->nama ?? ''}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Sign Out</a>
                  </li>
                  @endauth
                  
                  @guest
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                  </li>
                  @endguest
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
<div id="home" class="hero-area">
  <img class="shape" src="asset/images/bg-shape.png" alt="">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6 d-flex align-self-center">
        <div class="left-content">
          <div class="content">
            <h1 class="title">Aplikasi survei terbaik</h1>
            <p class="subtitle">
              Pastikan Anda telah mendaftar <br> 
              Buat survei Anda dalam beberapa menit <br>
              Lihat hasil dengan tampilan yang mudah di kelola
            </p>
            @guest
            <div class="links">
              <a href="{{ route('login') }}" class="mybtn3 mybtn-bg"><span>SIGN IN</span> </a>
            </div>
            @endguest
          </div>
          
        </div>
      </div>
      <div class="col-lg-4 order-first order-lg-last">
        
        <div class="owl-carousel owl-theme">
            <div class="item"><img height="100%" src="asset/images/w1.png" alt=""></div>
            <div class="item"><img height="100%" src="asset/images/w2.png" alt=""></div>
            <div class="item"><img height="100%" src="asset/images/w3.png" alt=""></div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero Area End -->
<!-- Testimonial Area Start -->
<section class="about" id="testimonial-area">
  <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
          <div class="section-title extra">
            <h2 class="title">Ulasan</h2>
            <p>Berikut ini ulasan dari para pengguna Kami</p>
          </div>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="box">
            <div class="inner-box">
                <div class="icon">
                  <i class="flaticon-delivery-truck"></i>
                </div>
                <a href="{{ route('testimonial.detail', 'sarpras') }}"><h4 class="title">Semua ulasan terkait sarana dan prasarana dikemas dalam tombol berikut</h4></a>
                <a href="{{ route('testimonial.detail', 'sarpras') }}"><button class="btn-modif"> TESTIMONIAL SARANA DAN PRASARANA</button> </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4"> 
          <div class="box">
          <div class="inner-box">
              <div class="icon">
                <i class="flaticon-art"></i>
              </div>
              <a href="{{ route('testimonial.detail', 'administrasi') }}"><h4 class="title">Semua ulasan terkait administrasi kuliah dikemas dalam tombol berikut</h4></a>
              <a href="{{ route('testimonial.detail', 'administrasi') }}" ><button class="btn-modif">TESTIMONIAL ADMINISTRASI</button> </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box">
            <div class="inner-box">
              <div class="icon">
                <i class="flaticon-apps"></i>
              </div>
              <a href="{{ route('testimonial.detail', 'akademik') }}"><h4 class="title">Semua ulasan terkait bidang akademik kampus dikemas dalam tombol berikut</h4></a>
              <a href="{{ route('testimonial.detail', 'akademik') }}" ><button class="btn-modif">TESTIMONIAL BIDANG AKADEMIK</button> </a>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- Testimonial Area End -->

<section class="contact" id="contact">
  <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
          <div class="section-title">
            <h2 class="title">Kontak Kami</h2>
            <p>Berikut data kontak Kami yang dapat Anda hubungi jika membutuhkan bantuan</p>
          </div>
      </div>
      </div>
      <div class="row">
      <div class="col-lg-4 col-md-6">
          <div class="info-box box1">
          <div class="left">
              <div class="icon">
              <i class="fas fa-phone"></i>
              </div>
          </div>
          <div class="right">
              <div class="content">
              <p>+333 123 4565 7898</p>
              <p>+333 153 4575 7893</p>
              </div>
          </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-6">
          <div class="info-box box2">
          <div class="left">
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
          </div>
          <div class="right">
              <div class="content">
              <p>demoname@name.com</p>
              <p>anothername@name.com</p>
              </div>
          </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-6">
          <div class="info-box box3">
          <div class="left">
              <div class="icon">
              <i class="fas fa-map-marked-alt"></i>
              </div>
          </div>
          <div class="right">
              <div class="content">
              <p>140 Berkley Street, Philadelphia, Pennsylvania</p>
              </div>
          </div>
          </div>
      </div>
      </div>
  </div>
</section>
<section>
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="section-title">
          <h2 class="title">Beri Ulasan</h2>
          <p>Ulasan Anda sangat berguna bagi untuk membantu Kami menjadi lebih berkembang</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="contact-form-wrapper">
          <form method="POST">
              @csrf

              <div class="row">
                  @auth
                  <div class="col-md-12">
                    <select name="ulasan" id="ulasan" class="form-control">
                      <option value=""> ~ Pilih Bidang Ulasan ~</option>
                      <option value="sarpras">Sarana dan Prasarana</option>
                      <option value="akademik">Bidang Akademik Kampus</option>
                      <option value="administrasi">Administrasi</option>
                    </select>
                  </div>
                  <div class="col-md-12 mt-2">
                      <input type="text" class="input-field borderd" name="name" id="name" placeholder="Email Anda" value="{{ session()->get('user')->nama ?? '' }}" readonly required>
                  </div>
                  <div class="col-md-12">
                      <input type="email" class="input-field borderd" name="email" id="email" placeholder="Masukkan Email Anda" value="{{ session()->get('user')->email ?? '' }}" readonly required>
                  </div>
                  @endauth
                  @guest
                  
                  <div class="col-md-12">
                    <select name="ulasan" id="ulasan" class="form-control">
                      <option value=""> ~ Pilih Bidang Ulasan ~</option>
                      <option value="sarpras">Sarana dan Prasarana</option>
                      <option value="akademik">Bidang Akademik Kampus</option>
                      <option value="administrasi">Administrasi</option>
                    </select>
                  </div>
                  <div class="col-md-12 mt-2">
                      <input type="text" class="input-field borderd" name="name" id="name" placeholder="Nama Anda" required>
                  </div>
                  <div class="col-md-12">
                      <input type="email" class="input-field borderd" name="email" id="email" placeholder="Masukkan Nama Anda" required>
                  </div>
                  @endguest
                  <div class="col-12">
                      <textarea class="input-field borderd textarea" rows="3" name="message" id="message"
                          placeholder="Masukkan pesan Anda disini" required></textarea>
                  </div>
                  @guest
                  <div class="col-md-12 mb-2">
                      <p class="form-text text-muted">Harap login terlebih dahulu sebelum memberikan ulasan</p>
                  </div>
                  @endguest
                  @auth
                  <div class="col-12">
                      <button type="submit" class="mybtn3 mybtn-bg"> <span>Send Feedback</span></button>
                  </div>
                  @endauth
                  @guest
                  <div class="col-12 mt-2 mb-4">
                      <a href="{{route('login')}}"><button type="button" class="mybtn3 mybtn-bg"> <span>Kirim Ulasan</span></button></a>
                  </div>
                  @endguest
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection