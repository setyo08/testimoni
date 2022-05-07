@extends('layouts.home')
<style>

</style>
  <!-- favicon -->
  <link rel="shortcut icon" href="asset/images/favicon.png" type="image/x-icon">
  <!-- bootstrap -->
  <link rel="stylesheet" href="{{ url('asset/css/bootstrap.min.css') }}">
  <!-- fontawesome -->
  <link rel="stylesheet" href="{{ url('asset/css/fontawesome.min.css') }}">
  <!-- Flat Icon -->
  <link rel="stylesheet" href="{{ url('asset/css/flaticon.css') }}">
  <!-- animate -->
  <link rel="stylesheet" href="{{ url('asset/css/animate.css') }}">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{ url('asset/css/owl.carousel.min.css') }}">
  <!-- magnific popup -->
  <link rel="stylesheet" href="{{ url('asset/css/magnific-popup.css') }}">
  <!-- AOS css -->
  <link rel="stylesheet" href="{{ url('asset/css/aos.css') }}">
  <!-- stylesheet -->
  <link rel="stylesheet" href="{{ url('asset/css/style.css') }}">
  <!-- responsive -->
  <link rel="stylesheet" href="{{ url('asset/css/responsive.css') }}">
@section('content') 

<section class="about" id="about">
  <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
          <div class="section-title extra">
            <h2 class="title">Berita Terbaru</h2>
            <p>Anda dapat membaca berita dibawah ini</p>
          </div>
      </div>
      </div>
      <div class="row">
        @foreach($news as $new)
          <div class="col-lg-4">
            <div class="box">
            <div class="inner-box">
                <div class="icon">
                  <a style="position: absolute; border-radius:0%;" href="{{ route('news.show', $new->id) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                  <img src="{{ $new->image }}" alt="">
                </div>
                <h4 class="title">{{ $new->title }}
                </h4>
                <p class="text">{{ $new->content }}</p>
            </div>
            </div>
          </div>
        @endforeach
      </div>
  </div>
</section>
@endsection