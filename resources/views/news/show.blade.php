@extends('layouts.home')
@section('content') 

<section class="pricing" id="pricing">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="section-title">
          <h2 class="title">{{ $new->title }}</h2>
          <img src="{{ $new->image }}" style="height:250px; width:100%">
          <p class="text-left mt-2">
            {{$new->content}}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection