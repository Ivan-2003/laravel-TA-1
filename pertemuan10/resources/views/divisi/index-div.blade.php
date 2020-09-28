    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('/dashboard/plugins/fontawesome-free/css/all.min.css')}}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="{{ asset("/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{ asset("/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
      <!-- JQVMap -->
      <link rel="stylesheet" href="{{ asset("/dashboard/plugins/jqvmap/jqvmap.min.css")}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset("/dashboard/dist/css/adminlte.min.css")}}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{ asset("/dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{ asset("/dashboard/plugins/daterangepicker/daterangepicker.css")}}">
      <!-- summernote -->
      <link rel="stylesheet" href="{{ asset("/dashboard/plugins/summernote/summernote-bs4.css")}}">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('/home')}}" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
    
        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link" style="text-align: center">
          {{-- <img src="{{ url('/dashboard/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8"> --}}
          <span class="brand-text font-weight-light">ADMIN CELENG</span>
        </a>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('karyawan')}}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>KARYAWAN</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('divisi')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>DIVISI</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('jabatan')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>JABATAN</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('status')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>STATUS</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel Data Divisi</h2>
                    <a href="{{ route('divisi.create') }}" class="btn btn-danger">
                        Tambah Divisi
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama Dvisi</th>
                          <th>Action</th>
                        </tr>
                        
                        
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->nama_divisi }}</td>
                                <td>
                                  {{-- <a href="{{ route('divisi.edit', $d->id) }}"><button class="btn btn-primary">EDIT</button></a> --}}
                                  <form action="{{ route('divisi.destroy', $d->id) }}" method="post">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-warning" onclick="return confirm('ANDA YAKIN UNTUK MENGHAPUS ?')">HAPUS</button>
                                  </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>



    <footer class="main-footer">
        <strong>Copyright &copy; 2020</strong>
        All rights reserved.
      </footer>
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="{{ asset('/dashboard/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('/dashboard/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('/dashboard/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('/dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('/dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('/dashboard/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('/dashboard/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('/dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{ asset('/dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/dashboard/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('/dashboard/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/dashboard/dist/js/demo.js')}}"></script>
    </body>
    </html>