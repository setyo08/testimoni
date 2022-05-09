@extends('layouts.home')
<style>
  .card-img {

  }
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
</head>
@php
use Carbon\Carbon;
endphp
<body>
<section class="about" id="about">
  <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
          <div class="section-title extra">
            <h2 class="title">Ulasan {{ $status == 'sarpras' ? 'Sarana dan Prasarana' : ucfirst($status) }}</h2>
            <p>Ulasan mengenai {{ $status == 'sarpras' ? 'sarana dan prasarana' : $status }} dapat Anda lihat dibawah ini</p>
          </div>
      </div>
      </div>
      <div class="row">
        @foreach($feedbacks as $new)
          <div class="col-lg-4 col-sm-12">
            <div class="box">
            <div class="inner-box">
                <div class="icon">
                  @if($status =='sarpras')
                  <img src="/asset/images/testimonialimage/sarpras.png" style="border-radius:50%; 
                  height:80px; 
                  width:80px; 
                  border: 5px solid #5720D4; 
                  position: relative; 
                  top: -20px;">
                  @elseif($status =='administrasi')
                  <img src="/asset/images/testimonialimage/administrasi.png" style="border-radius:50%; 
                  height:80px; 
                  width:80px; 
                  border: 5px solid #5720D4; 
                  position: relative; 
                  top: -20px;">
                  @else
                  <img src="/asset/images/testimonialimage/akademik.png" style="border-radius:50%; 
                  height:80px; 
                  width:80px; 
                  border: 5px solid #5720D4; 
                  position: relative; 
                  top: -20px;">
                  @endif
                </div>
                <p class="text">{{ $new->message }}</p>
                <hr>
                <h5>{{ $new->user->nama }}</h5>
                <p>Pengguna</p>
                <p>{{ $new->created_at->isoFormat('dddd, DD-MM-YYYY - HH:mm') }}</p>
            </div>
            </div>
          </div>
        @endforeach
      </div>
  </div>
</section>
@endsection