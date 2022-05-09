@extends('layouts.home')
@section('content')
</head>

    <body>
    <div class="content d-flex justify-content-center">
        <div class="col-xl-4 col-lg-6 col-md-8 col-12 mt-4">
            
                <div class="card">
                    <div class="card-header">
                        <div class="position-absolute top-0 start-0 p-1">
                            <a href="{{route('index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                            </svg></a>
                        </div>
                        @if ($message = Session::get('alert'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                        <div class="text-center mt-4">
                            <h3><b>MASUK</b></h3>
                            <p>Silahkan masuk dengan akun anda</p>
                        </div>
                    </div>
                    <div class="card-body">
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

                        <button type="submit" class="mybtn3 mybtn-bg"><span>Sign In</span></button>
                        <p style="margin-bottom: 0;" class="py-4">Jika anda belum memiliki akun silahkan lakukan <a href="{{route('register')}}">register</a></p>
                    </form>
                    </div>
                </div>
            
        </div>
    </div>
    

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
                    <button type="button" class="mybtn3 mybtn-bg" data-dismiss="modal">Tutup</button>
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
@endsection
