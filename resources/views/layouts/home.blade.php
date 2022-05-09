<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="/maskot.png" type="image/x-icon">
  <!-- bootstrap -->
  <link rel="stylesheet" href="{{ url('/asset/css/bootstrap.min.css') }}">
  <!-- fontawesome -->
  <link rel="stylesheet" href="{{ url('/asset/css/fontawesome.min.css') }}">
  <!-- Flat Icon -->
  <link rel="stylesheet" href="{{ url('/asset/css/flaticon.css') }}">
  <!-- animate -->
  <link rel="stylesheet" href="{{ url('/asset/css/animate.css') }}">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{ url('/asset/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('/asset/css/owl.theme.default.css') }}">
  <!-- magnific popup -->
  <link rel="stylesheet" href="{{ url('/asset/css/magnific-popup.css') }}">
  <!-- AOS css -->
  <link rel="stylesheet" href="{{ url('/asset/css/aos.css') }}">
  <!-- stylesheet -->
  <link rel="stylesheet" href="{{ url('/asset/css/style.css') }}">
  <!-- responsive -->
  <link rel="stylesheet" href="{{ url('/asset/css/responsive.css') }}">


  <!-- Navebar Area End -->
  @yield('content')  
  
  <!-- Footer Section Start -->
  <footer class="footer mt-5" id="footer">
    <img class="shape2" src="{{ url('asset/images/bg-shape2.png') }}">
    <div class="copy-bg text-center">
      <p>Copyright © 2021. All rights reserved by
        <a href="{{route('index')}}">Bagus</a>
      </p>
    </div>
  </footer>
  <!-- Footer Section End -->

    @auth
    <div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Akun Anda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" id="name_profile" aria-describedby="helpId" value="{{session()->get('user')->nama ?? ''}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email_profile" aria-describedby="helpId" value="{{session()->get('user')->email ?? ''}}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth

  <!-- jquery -->
  <script src="{{ url('/asset/js/jquery.js') }}"></script>
  <script src="{{ url('/asset/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ url('/asset/js/jquery.magnific-popup.js') }}"></script>
  <!-- popper -->
  <script src="{{ url('/asset/js/popper.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ url('/asset/js/bootstrap.min.js') }}"></script>
  <!-- way poin js-->
  <script src="{{ url('/asset/js/waypoints.min.js') }}"></script>
  <!-- owl carousel -->
  <script src="{{ url('/asset/js/owl.carousel.min.js') }}"></script>
  <!-- magnific popup -->
  <!-- aos js-->
  <script src="{{ url('/asset/js/aos.js') }}"></script>
  <!-- counterup js-->
  <!-- easing js-->
  <script src="{{ url('/asset/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ url('/asset/js/contact.js') }}"></script>
  <!-- main -->
  <script src="{{ url('/asset/js/main.js') }}"></script>

  @if (isset($session['feedback_success']))
  <div class="modal fade" id="feedback_success" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Feedback</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p>{{$session['feedback_success']}}</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>

  <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', e => {
          $('#feedback_success').modal('show')
      })
      
  </script>
  @endif
  <script type="text/javascript">
    $(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        }
    }
})})

  </script>
</body>

</html>
