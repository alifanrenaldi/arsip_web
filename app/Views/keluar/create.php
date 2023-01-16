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
  <link rel="stylesheet" href="adminlte-v2/dist/css/skins/_all-skins.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- Full Width Column -->
  <div>
    <nav class="navbar navbar-expand-lg " class="container-fluid" style="background-color:#3c8dbc ;">
      <div class="container">
        <a class="navbar-brand" href="#" style="color:#ffffff ;"><b>Arsip</b>Surat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/keluar" style="color:#ffffff ;">Surat Keluar</a>
            </li>
        </div>
      </div>
    </nav>
  </div>

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
        <form action="/keluar/store" method="GET">
          <div class="mb-3">
            <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
            <input type="date" name="tanggal_surat" class="form-control" id="tanggal_surat">
          </div>
          <div class="mb-3">
            <label for="perihal" class="form-label">Perihal</label>
            <input type="text" name="perihal" class="form-control" id="perihal">
          </div>
          <div class="mb-3">
            <label for="file" class="form-label">File</label>
            <input type="text" name="file" class="form-control" id="file">
          </div>
          <div class="mb-3">
            <label for="kode_instansi" class="form-label">Kode Instansi</label>
            <input type="number" name="kode_instansi" class="form-control" id="kode_instansi">
          </div>
          <div class="mb-3">
            <label for="id_admin" class="form-label">Id Admin</label>
            <input type="number" name="id_admin" class="form-control" id="id_admin">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- ./wrapper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </body>

</html>