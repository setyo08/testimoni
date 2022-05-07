<!doctype html>
<html lang="en">

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

        <!-- DataTables -->
        <link href="/admin-assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin-assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="/admin-assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark" class="sidebar-enable vertical-collpsed">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="{{route('admin-register')}}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Add Admin</span></a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{route('logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Sign Out</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block justify-content-between d-flex d-inline">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close bg-primary" data-bs-dismiss="alert">×</button>	
                        </div>
                      @endif
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted fw-medium">Feedback</p>
                                                        <h4 class="mb-0">{{$feedback->count()}}</h4>
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-message-alt-dots font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted fw-medium">Admin</p>
                                                        <h4 class="mb-0">{{$admin->count()}}</h4>
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-user font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Feedback</h4>

                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>Tanggal Lahir</th>
                                                <th>No HP</th>
                                                <th>Pesan</th>
                                                <th>Bidang Ulasan</th>
                                                <th>Action</th>
                                                <th>Dikirim</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            @foreach ($feedback as $fb)
                                            <div class="modal fade" id="feedback_show{{$fb->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="post">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Feedback</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @csrf
                                                                <input type="hidden" name="feedback" value="{{$fb->id}}">

                                                                Apakah anda yakin ingin menampilkan feedback ini ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary">Tampilkan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="feedback_hide{{$fb->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="post">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Feedback</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @csrf
                                                                <input type="hidden" name="feedback" value="{{$fb->id}}">

                                                                Apakah anda yakin ingin menyembunyikan feedback ini ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-danger">Sembunyikan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <tr>
                                                <td>{{$fb->user->nama}}</td>
                                                <td>{{$fb->user->email}}</td>
                                                <td>{{$fb->user->alamat}}</td>
                                                <td>{{$fb->user->tanggal_lahir}}</td>
                                                <td>{{$fb->user->no_hp}}</td>
                                                <td>{{$fb->message}}</td>
                                                <td>
                                                    @if($fb->ulasan == 'sarpras')
                                                        Sarana dan Prasarana
                                                    @elseif($fb->ulasan == 'administrasi')
                                                    Administrasi
                                                    @else
                                                    Akademik Kampus
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($fb->is_show)
                                                    <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#feedback_hide{{$fb->id}}">Sembunyikan</button>
                                                    @else
                                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#feedback_show{{$fb->id}}">Tampilkan</button>
                                                    @endif
                                                </td>
                                                <td>{{$fb->created_at}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Admin Table --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Admin</h4>

                                        <table id="datatable2" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>Tanggal Lahir</th>
                                                <th>No HP</th>
                                                <th>Dibuat</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            @foreach ($admin as $fb)
                                            <div class="modal fade" id="admin_delete{{$fb->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="post">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="id" value="{{$fb->id}}">

                                                                <p>Apakah anda yakin ingin menghapus admin ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <tr>
                                                <td>{{$fb->nama}}</td>
                                                <td>{{$fb->email}}</td>
                                                <td>{{$fb->alamat}}</td>
                                                <td>{{$fb->tanggal_lahir}}</td>
                                                <td>{{$fb->no_hp}}</td>
                                                <td>{{$fb->created_at}}</td>
                                                <td><button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#admin_delete{{$fb->id}}">Delete</button></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Admin Table --}}
                        {{-- News Table --}}
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title justify-content-between d-flex d-inline mb-2">
                                            <span>News</span>
                                            <button data-bs-toggle="modal" data-bs-target="#tambahNews" class="btn btn-primary btn-sm">Tambah News</button>
                                        </h4>
                                        <div class="table-responsive">
                                            <table id="datatable3" class="table table-bordered dt-responsive  nowrap w-100">
                                                <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Content</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                                @foreach ($news as $new)
                                                <tr>
                                                    <td>{{$new->title}}</td>
                                                    <td>{{$new->content}}</td>
                                                    <td class="d-flex d-inline">
                                                        <form action="{{ route('admin.news.delete', $new->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End News Table --}}
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <div class="modal fade" id="tambahNews" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah News</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Judul</label>
                                            <input type="text" class="form-control" required name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="content">Konten</label>
                                            <input type="text" class="form-control" required name="content">
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Gambar</label>
                                            <input type="file" class="form-control" required name="image">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <a class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Bagus.
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="/admin-assets/libs/jquery/jquery.min.js"></script>
        <script src="/admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/admin-assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/admin-assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/admin-assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="/admin-assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="/admin-assets/js/pages/dashboard.init.js"></script>

        <!-- Required datatable js -->
        <script src="/admin-assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/admin-assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="/admin-assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/admin-assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="/admin-assets/libs/jszip/jszip.min.js"></script>
        <script src="/admin-assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="/admin-assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="/admin-assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="/admin-assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="/admin-assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="/admin-assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/admin-assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="/admin-assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="/admin-assets/js/app.js"></script>

        @if (isset($session['admin_deleted']))
        <div class="modal fade" id="admin_deleted" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{$session['admin_deleted']}}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', e => {
                $('#admin_deleted').modal('show')
            })
        </script>
        @endif
        @if (isset($session['feedback_update']))
        <div class="modal fade" id="feedback_update" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Feedback</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{$session['feedback_update']}}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', e => {
                $('#feedback_update').modal('show')
            })
        </script>
        @endif
    </body>

</html>
