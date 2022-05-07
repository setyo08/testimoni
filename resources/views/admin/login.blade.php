<!doctype html>
<html lang="en">


<!-- Mirrored from Bagus.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Apr 2021 09:51:51 GMT -->
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
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue to Admin</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="/admin-assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 mt-3">
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email" type="email" id="email" placeholder="Enter email" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" required>
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Sign In</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="/admin-assets/libs/jquery/jquery.min.js"></script>
        <script src="/admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/admin-assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/admin-assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/admin-assets/libs/node-waves/waves.min.js"></script>

        <!-- App js -->
        <script src="/admin-assets/js/app.js"></script>

        @if (isset($session['login_failed']))
        <div class="modal fade" id="login_failed" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{$session['login_failed']}}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', e => {
                $('#login_failed').modal('show')
            })
        </script>
        @endif
    </body>

<!-- Mirrored from Bagus.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Apr 2021 09:51:51 GMT -->
</html>
