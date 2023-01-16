<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Arsip Surat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="adminlte-v2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte-v2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="adminlte-v2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte-v2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="adminlte-v2/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand"><b>Arsip</b>Surat</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/surat_masuk">Surat Masuk<span class="sr-only">(current)</span></a></li>
            <li><a href="/surat_keluar">Surat Keluar</a></li>
          </ul>
        
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
           
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="adminlte-v2/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">RinraJr</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="adminlte-v2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    RinraJr - Web Developer
                    <small>Member since Nov. 2020</small>
                  </p>
                </li>
                <!-- Menu Body -->
               
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
  <section class="content">
   <div class="container">
    
   <div class="row">
        <div class="col-10">
            <form action="/store" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nomor_surat">Nomor Surat</label>
                    <input type="text" name="nomor_surat" class="form-control" id="nomor_surat">
                </div>

                <div class="form-group">
                    <label for="tangal_surat">Tanggal Surat</label>
                    <input type="date" name="tanggal_surat" class="form-control" id="tanggal_surat">
                </div>

                <div class="form-group">
                    <label for="tanggal_diterima">Tanggal Terima</label>
                    <input type="date" name="tanggal_diterima" class="form-control" id="tanggal_diterima">
                </div>

                <div class="form-group">
                    <label for="asal_surat">Asal Surat</label>
                    <input type="text" name="asal_surat" class="form-control" id="asal_surat">
                </div>

                <div class="form-group">
                    <label for="perihal">Perihal</label>
                    <input type="text" name="perihal" class="form-control" id="perihal">
                </div>

                <div class="form-group" >
                    <label for="file">File Surat</label>
                    <input type="file" name="file" class="form-control" id="file" style="height: auto;">
                </div>

                <div class="form-group">
                    <label for="kode_instansi">Instansi</label>
                    <input type="text" name="kode_instansi" class="form-control" id="kode_instansi">
                </div>
                
                <div class="form-group">
                    <label for="id_pengguna">Penerima</label>
                    <input type="text" name="id_pengguna" class="form-control" id="id_pengguna">
                </div>

                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                </div>

                

            </form>     

   </div>
  </section>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="adminlte-v2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="adminlte-v2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="adminlte-v2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="adminlte-v2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="adminlte-v2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminlte-v2/dist/js/demo.js"></script>
</body>
</html>
