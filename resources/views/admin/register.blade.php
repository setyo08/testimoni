<!doctype html>
<html lang="en">


<!-- Mirrored from Bagus.com/skote/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Apr 2021 09:51:52 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Feedback App" name="description" />
        <meta content="Bagus" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin-assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/admin-assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/admin-assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/admin-assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Register</h5>
                                            <p>Add admin for manage your data.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="/admin-assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="p-2 mt-3">
                                    <form method="POST">
                                        @csrf

                                        <div class="mt-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="nama" value="{{ old('nama') }}" placeholder="Enter name" required>
                                        </div>

                                        <div class="mt-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat" required>
                                        </div>
                                        <div class="mt-3">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Alamat" required>
                                        </div>
                                        <div class="mt-3">
                                            <label for="no_hp" class="form-label">No HP</label>
                                            <input type="numter" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" placeholder="Alamat" required>
                                        </div>
                                        
                                        <div class="mt-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="email" value="{{ old('email') }}" placeholder="Enter email" required>
                                        </div>
                                        @if($errors->has('email'))
                                            <div class="error mt-1">{{ $errors->first('email') }}</div>
                                        @endif
                                        <div class="mt-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="password" value="{{ old('password') }}" placeholder="Enter password" required>
                                        </div>

                                        <div class="mt-4 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="/admin-assets/libs/jquery/jquery.min.js"></script>
        <script src="/admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/admin-assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/admin-assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/admin-assets/libs/node-waves/waves.min.js"></script>

        <!-- validation init -->
        <script src="/admin-assets/js/pages/validation.init.js"></script>

        <!-- App js -->
        <script src="/admin-assets/js/app.js"></script>

        @if (isset($session['register_success']))
        <div class="modal fade" id="register_success" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Register</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{$session['register_success']}}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', e => {
                $('#register_success').modal('show')
            })
        </script>
        @endif

        @if (isset($session['register_failed']))
        <div class="modal fade" id="register_failed" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Register</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{$session['register_failed']}}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', e => {
                $('#register_failed').modal('show')
            })
        </script>
        @endif
    </body>

<!-- Mirrored from Bagus.com/skote/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Apr 2021 09:51:53 GMT -->
</html>
