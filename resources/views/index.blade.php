@extends('layouts.home')
@section('content')
<style>
  .card-img {
    border-radius:50%; 
    height:80px; 
    width:40%; 
    border: 5px solid #5720D4; 
    position: relative; 
    top: -20px;
  }
  .btn-modif {
    background-color: #651DD0; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    cursor: pointer;
  }
  .card-container:hover *, p.text-title:hover {
    color:white;
  }
  .text-title {
    font-size: 12px;
  }
</style>
<div id="home" class="hero-area">
  <img class="shape" src="assets/images/bg-shape.png" alt="">
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
        <div class="right-img">
          <img class="img-fluid img" src="assets/images/w4.png" alt="">
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
          <div class="box card-container" style="background: #cacfcb;">
            <div class="inner-box">
                <div class="icon">
                  <img src="/asset/images/testimonialimage/sarpras.png" class="img-fluid card-img">
                </div>
                <a href="{{ route('testimonial.detail', 'sarpras') }}"><p class="text-title">Semua ulasan terkait sarana dan prasarana dikemas dalam tombol berikut</p></a>
                <a href="{{ route('testimonial.detail', 'sarpras') }}" class="btn-modif">TESTIMONIAL SARANA DAN PRASARANA</a>
            </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="box card-container" style="background: #cacfcb;">
            <div class="inner-box">
                <div class="icon">
                  <img src="/asset/images/testimonialimage/administrasi.png" class="img-fluid card-img">
                </div>
                <a href="{{ route('testimonial.detail', 'administrasi') }}"><p class="text-title">Semua ulasan terkait administrasi dikemas dalam tombol berikut</p></a>
                <a href="{{ route('testimonial.detail', 'administrasi') }}" class="btn-modif">TESTIMONIAL ADMINISTRASI</a>
            </div>
          </div>
      </div>
      <div class="col-lg-4">
        <div class="box card-container" style="background: #cacfcb;">
          <div class="inner-box">
              <div class="icon">
                <img src="/asset/images/testimonialimage/akademik.png" class="img-fluid card-img">
              </div>
              <a href="{{ route('testimonial.detail', 'akademik') }}"><p class="text-title">Semua ulasan terkait bidang akademik kampus dikemas dalam tombol berikut</p></a>
              <buttoa href="{{ route('testimonial.detail', 'akademik') }}" class="btn-modif">TESTIMONIAL BIDANG AKADEMIK</buttoa>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- Testimonial Area End -->
<section class="about" id="about">
  <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
          <div class="section-title extra">
            <h2 class="title">Mengapa Feedback yang terbaik</h2>
            <p>Berikut ini kelebihan Kami dalam memberikan pelayanan</p>
          </div>
      </div>
      </div>
      <div class="row">
      <div class="col-lg-4">
          <div class="box">
          <div class="inner-box">
              <div class="icon">
              <i class="flaticon-art"></i>
              </div>
              <h4 class="title">Interaktif</h4>
              <p class="text">Tampilan yang interaktif sehingga mudah digunakan oleh pengguna</p>
          </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="box">
          <div class="inner-box">
              <div class="icon">
              <i class="flaticon-apps"></i>
              </div>
              <h4 class="title">Daring</h4>
              <p class="text">Dengan memanfaatkan daring survei dapat dilakukan dimana dan kapan saja</p>
          </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="box">
          <div class="inner-box">
              <div class="icon">
              <i class="flaticon-apps"></i>
              </div>
              <h4 class="title">Aman</h4>
              <p class="text">Data yang Anda berikan akan dikelola dengan aman</p>
          </div>
          </div>
      </div>
  </div>
</section>
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