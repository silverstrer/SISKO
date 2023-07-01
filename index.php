<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISKO v 1.0 | Sistem Informasi Sekolah)</title>

  <!-- Ionicons -->
  <link rel="icon" href="db_icon.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>


<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <h1><b>SISKO </b>v1.0</h1>
        <h5>Sistem Informasi Sekolah</h5>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Masuk akun</p>

        <form action="conf/ceklogin.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="User" name="userakun" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="passakun" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- tampilan cek login -->
          <div class="mb-4" style="color:red;">
            <?php
            if (isset($_GET['pesan'])) {
              if ($_GET['pesan'] == "gagal") {
                echo "Login gagal! username dan password salah!";
              } else if ($_GET['pesan'] == "logout") {
                echo "Anda telah berhasil logout";
              } else if ($_GET['pesan'] == "belum_login") {
                echo "Anda harus login untuk mengakses halaman admin";
              }
            }
            ?>
            <!-- /tampilan login -->
          </div>
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" name="submit">Masuk</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  <footer class="mx-auto">
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">Gala Sanca</a>.</strong>
    All rights reserved.
    <div class="d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>