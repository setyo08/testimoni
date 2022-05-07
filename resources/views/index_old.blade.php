<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

        <!-- Style -->
        <link rel="stylesheet" href="/assets/css/style.css">

        <title>Feedback</title>

        <style>
            @media (max-width: 768px) {
                .carousel-inner .carousel-item > div {
                    display: none;
                }
                .carousel-inner .carousel-item > div:first-child {
                    display: block;
                }
            }

            .carousel-inner .carousel-item.active,
            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                display: flex;
            }

            /* display 3 */
            @media (min-width: 768px) {

                .carousel-inner .carousel-item-right.active,
                .carousel-inner .carousel-item-next {
                transform: translateX(33.333%);
                }

                .carousel-inner .carousel-item-left.active,
                .carousel-inner .carousel-item-prev {
                transform: translateX(-33.333%);
                }
            }

            .carousel-inner .carousel-item-right,
            .carousel-inner .carousel-item-left{
            transform: translateX(0);
            }
        </style>
    </head>
    <body>
    <div class="content">

        <div class="container">
        <div class="row align-items-stretch no-gutters contact-wrap">
            @auth
            <div class="col-md-12">
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
                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" value="{{$user->name}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" value="{{$user->email}}" readonly>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="{{route('logout')}}"><button type="button" class="btn btn-danger">Sign Out</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary mr-3 mt-3 float-right" data-toggle="modal" data-target="#account">{{$user->name}}</button>
            </div>
            @endauth

            <div class="col-md-12">
                <div class="col-md-12 text-center mt-4">
                    <h1><b>Feedback</b></h1>
                </div>
            </div>
            <div class="col-md-12 mx-auto my-auto px-5 pt-5">
                @php
                    $show = array_filter($list_feedback->toArray(), function ($feedback)
                    {
                        return ($feedback['is_show'] != 0);
                    });
                @endphp
                @if (count($show) != 0)
                <div class="text-center">
                    <div id="recipeCarousel" class="carousel slide w-100 wm-100" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach ($list_feedback as $key => $feedback)
                                @if ($feedback->is_show)
                                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                    <div class="col-md-4" style="min-width: 0 !important">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$feedback->name}}</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">{{$feedback->email}}</h6>
                                                <p class="card-text pt-2">{{$feedback->message}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                @else
                <p class="text-center">Feedback is still empty</p>
                @endif
            </div>
            <div class="col-md-12 text-center mt-5">
                @guest
                <div class="modal fade" id="modal_send_feedback" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Buat Akun</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="mt-2">Untuk membuat feedback anda harus melakukan sign in ke akun anda.</p>

                                <div class="button mb-2">
                                    <a href="{{route('login')}}">
                                        <button type="button" class="btn btn-primary">
                                            Sign In
                                        </button>
                                    </a>
                                    <a href="{{route('register')}}">
                                        <button type="button" class="btn btn-primary">
                                            Sign Up
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endguest
                @auth
                <div class="modal fade" id="modal_send_feedback" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <form method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title">Send Feedback</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form">
                                            @csrf

                                            <div class="row">
                                                <div class="col-md-6 form-group mb-3 text-left">
                                                    <label for="name" class="col-form-label text-left">Name *</label>
                                                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" placeholder="Your name" readonly>
                                                </div>
                                                <div class="col-md-6 form-group mb-3 text-left">
                                                    <label for="email" class="col-form-label">Email *</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" placeholder="Your email" readonly>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-md-12 form-group mb-3 text-left">
                                                    <label for="message" class="col-form-label">Message *</label>
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                                                </div>
                                            </div>

                                            <div id="form-message-warning mt-4"></div>
                                            <div id="form-message-success">
                                            Your message was sent, thank you!
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Send Feedback</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endauth
                <input type="button" value="Send Feedback" class="btn btn-primary rounded-0 py-2 px-4 mb-5" data-toggle="modal" data-target="#modal_send_feedback">
            </div>
        </div>
        </div>

    </div>
    </body>

    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.validate.min.js"></script>
    <script src="/assets/js/main.js"></script>

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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', e => {
            $('#feedback_success').modal('show')
        })
    </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', e => {
            $('#recipeCarousel').carousel({
                interval: 10000
            })

            $('.carousel .carousel-item').each(function(){
                var minPerSlide = 3;
                var next = $(this).next();
                if (!next.length) {
                next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i=0;i<minPerSlide;i++) {
                    next=next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            });
        })
    </script>
</html>
