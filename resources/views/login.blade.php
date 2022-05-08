@extends('layouts.home')
@section('content')
</head>

    <body>
    <div class="content d-flex justify-content-center">
        <div class="col-xl-4 col-lg-6 col-md-8 col-12">
            
                <div class="card">
                    <div class="card-header">

                        @if ($message = Session::get('alert'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                        <div class="text-center mt-4">
                            <h1><b>Sign In</b></h1>
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
