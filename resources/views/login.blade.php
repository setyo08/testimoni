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

        <title>Sign In</title>

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
                <div class="col-md-12">
                    @if ($message = Session::get('alert'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="col-md-12 text-center mt-5">
                        <h1><b>Sign In</b></h1>
                    </div>
                </div>
                <div class="col-md-12 mx-auto my-auto px-5 pt-5">
                    <form method="post">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary mt-4 mb-4 w-100">Sign In</button>
                        <p class="mb-5 text-center">Jika anda belum memiliki akun silahkan lakukan <a href="{{route('register')}}">register</a>.</p>
                    </form>
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

    @if (isset($session['signin_failed']))
    <div class="modal fade" id="signin_failed" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{$session['signin_failed']}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', e => {
            $('#signin_failed').modal('show')
        })
    </script>
    @endif
</html>
