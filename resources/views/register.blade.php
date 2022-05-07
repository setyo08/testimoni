<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" value="{{ old('viewport') }}" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

        <!-- Style -->
        <link rel="stylesheet" href="/assets/css/style.css">

        <title>Sign Up</title>

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
            
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">
                        Form Registrasi
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
                            <div class="container-fluid">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" id="name" aria-describedby="helpId" placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" aria-describedby="helpId" placeholder="Email">
                                            @if($errors->has('email'))
                                                <div class="error text-danger">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" id="alamat" aria-describedby="helpId" placeholder="Alamat">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" id="tanggal_lahir" aria-describedby="helpId" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="no_hp">No HP</label>
                                            <input type="number" class="form-control" name="no_hp" value="{{ old('no_hp') }}" id="no_hp" aria-describedby="helpId" placeholder="No HP">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="password" aria-describedby="helpId" placeholder="Password">
                                        </div>
                                    </div>
                                        <button type="submit" class="btn btn-primary mt-4 mb-4 w-100">Sign Up</button>
                                    <p>Jika anda sudah memiliki akun silahkan lakukan <a href="{{route('login')}}">login</a>.</p>
                                </div>
                            </div>
                        </form>
                    </div>
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

    @if (isset($session['signup_failed']))
    <div class="modal fade" id="signup_failed" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{$session['signup_failed']}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', e => {
            $('#signup_failed').modal('show')
        })
    </script>
    @endif
</html>
