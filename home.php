
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Tode Kisar</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="./admin/index2.html" class="h1"><b>Login</b> | Admin</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan login untuk akses laman!</p>


      <?php 

        if (isset($_GET['pesan'])) {
          if ($_GET['pesan'] == "gagal" ) {
            echo "<script>alert('Login gagal Email dan Password salah!');</script>";
            // echo "<script>location='index.php';</script>";
          }
          elseif ($_GET['pesan'] == "logout") {
            echo "<script>alert('Anda telah logout');</script>";
          }
          elseif ($_GET['pesan'] == "belum_login") {
            echo "<script>alert('Anda harus login terlebih dahulu');</script>";
        }
      }

       ?>


      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username"
          autofocus="" required="" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password"
          autofocus="" required="" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ingatkan Saya
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-sm btn-block" style="border-radius: 20px;">Login</button>
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

<!-- jQuery -->
<script src="./admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./admin/dist/js/adminlte.min.js"></script>
</body>
</html>