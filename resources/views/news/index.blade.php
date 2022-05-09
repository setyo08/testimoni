@extends('layouts.home')
@section('content') 
</head>
<body>
  
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
                  <a style="position: absolute; top: 0; right: 0;" href="{{ route('news.show', $new->id) }}" class="mybtn3 mybtn-bg">Lihat Detail</a>
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