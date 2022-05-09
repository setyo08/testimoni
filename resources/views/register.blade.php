@extends('layouts.home')
@section('content')
</head>
    <div class="content d-flex justify-content-center" >
        <div class="col-xl-6 col-md-8 col-12 p-4 ">
            
                <div class="card">
                    <div class="card-header">
                        <div class="position-absolute top-0 start-0 p-1">
                            <a href="{{route('index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                            </svg></a>
                        </div>
                        <div class="text-center mt-4">
                            <h3><b>Form Registrasi</b></h3>
                            <p>Silahkan daftarkan identitas anda</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" id="name" aria-describedby="helpId" placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" aria-describedby="helpId" placeholder="Email">
                                            @if($errors->has('email'))
                                                <div class="error text-danger">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" id="alamat" aria-describedby="helpId" placeholder="Alamat">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" id="tanggal_lahir" aria-describedby="helpId" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="no_hp">No HP</label>
                                            <input type="number" class="form-control" name="no_hp" value="{{ old('no_hp') }}" id="no_hp" aria-describedby="helpId" placeholder="No HP">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="password" aria-describedby="helpId" placeholder="Password">
                                        </div>
                                    </div>
                                    
                                </div>
                                <button type="submit" class="mybtn3 mybtn-bg"> <span>Sign Up</span></button>
                                <p style="margin-bottom: 0;" class="py-4">Jika anda sudah memiliki akun silahkan lakukan <a href="{{route('login')}}">login</a>.</p>
                        </form>
                    </div>
                </div>
            
        </div>

    </div>
    </body>

    
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
@endsection
