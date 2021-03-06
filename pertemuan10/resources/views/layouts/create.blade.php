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
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
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
            <a href="index3.html" class="nav-link">Home</a>
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
    
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="{{ url('/dashboard/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="{{ url('/dashboard/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="{{ url('/dashboard/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
    
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
        <h2>Karyawan Upload</h2>
        <hr>
        <form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nik">Nik Karyawan</label>
                <input type="text" class="form-control" id="nik" name="nik" value="{{ old('$karyawan->nik')}}">
                @error('nik')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="nama_karyawan">Nama Karyawan</label>
                <input type="text" class="form-control-file" id="nama_karyawan" name="nama_karyawan">
                @error('nama_karyawan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror 
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control-file" id="alamat" name="alamat">
                @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="no_tlp">No Tlp</label>
                <input type="text" class="form-control-file" id="no_tlp" name="no_tlp">
                @error('no_tlp')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="divisi_id">Divisi</label>
                <select name="divisi_id" id="divisi_id">
                    @foreach ($divisi as $div)
                    <option value="{{$div->id}}" {{ old('div->id')=="div->nama_divisi" ? 'selected': ''}}>
                        {{$div->nama_divisi}}
                    </option>
                        
                    @endforeach
                </select>
                @error('divisi_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jabatan_id">Jabatan</label>
                <select name="jabatan_id" id="jabatan_id">
                    @foreach ($jabatan as $jab)
                    <option value="{{$jab->id}}" {{ old('jab->id')=="jab->nama_jabatan" ? 'selected': ''}}>
                        {{$jab->nama_jabatan}}
                    </option>
                        
                    @endforeach
                </select>
                @error('jabatan_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status_id">Status</label>
                <select name="status_id" id="status_id">
                    @foreach ($status as $sta)
                    <option value="{{$sta->id}}" {{ old('sta->id')=="sta->nama_status" ? 'selected': ''}}>
                        {{$sta->nama_status}}
                    </option>
                        
                    @endforeach
                </select>
                @error('status_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="from-group">
              <label for="hobi">Pilih Hobi</label>
              <select class="js-example-placeholder-single js-states form-control" name="hobi[]" multiple="multiple">
                @foreach ($daftar_hobi as $hobi)
                <option value="{{ $hobi->id}}">{{$hobi->nama_hobi}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
            {{-- <a href="{{ route('tampil-kasir') }}" class="btn btn-danger">
                Back To Table
            </a> --}}
        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
    $(".js-example-placeholder-single").select2({
    placeholder: "Select a state",
    allowClear: true
    });
    </script>
    </body>
    </html>