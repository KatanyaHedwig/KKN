<?php
    session_start();
    if (isset($_SESSION['nohp'])) {
        header('location:../../user'); 
    }else{
        echo'';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login Page</title>
  <link rel="icon" href="../../media/images/logo/logo1.png">
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

             

              <div class="col-lg-12" style="background-image: url(/*../../media/images/background/bg1.png*/);background-position: center;background-repeat: no-repeat;background-size: 112%;">
                <div class="row justify-content-left">
                  <a href="../"  ><!-- <img align="center" width="550" height="45" src="../media/images/logo/header.png" > --></a>
                </div>
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                  </div>
                  <form action="" method="post" class="user">
                    <div class="form-group">
                      <input type="number" name="nohp" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nomor HP"required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="nim" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="login" value="Login" />

                    <hr>
                    <br><br>
                    <a href="../signup" class="btn btn-success btn-user btn-block" style="background-color: green">
                     Daftar Peserta
                    </a>
                    <a href="../../" class="btn btn-danger btn-user btn-block">
                      Kembali ke Halaman Utama
                    </a>
                  </form>
                 <br>
                <?php
                  if (isset($_POST['login'])) {
                    include '../../assets/mysql_connect/koneksi.php';
                    $alert = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE nohp = '".$_POST['nohp']."' AND nim = '".$_POST['nim']."'");
                    $row = mysqli_fetch_array($alert);
                    $count = mysqli_num_rows($alert);
                    if ($count > 0) {
                      session_start();
                      $_SESSION['nim'] = $row['nim'];
                      $_SESSION['nohp'] = $row['nohp'];
                      $_SESSION['nama'] = $row['nama'];
                      $_SESSION['tempat_lahir'] = $row['tempat_lahir'];
                      $_SESSION['tgllahir'] = $row['tgllahir'];
                      $_SESSION['jk'] = $row['jk'];
                      $_SESSION['agama'] = $row['agama'];
                      $_SESSION['fakultas'] = $row['fakultas'];
                      $_SESSION['program_studi'] = $row['program_studi'];
                      $_SESSION['alamat'] = $row['alamat'];
                      $_SESSION['alamat_ortu'] = $row['alamat_ortu'];
                      $_SESSION['nohp_ortu'] = $row['nohp_ortu'];
                      $_SESSION['kondisi'] = $row['kondisi'];
                      $_SESSION['status'] = $row['status'];
                      $_SESSION['jumlah_sks'] = $row['jumlah_sks'];
                      $_SESSION['lokasi'] = $row['lokasi'];
                      header('location:../../user');
                    }else{
                      echo '<p style="color:red" align="center"><strong>ERROR!!</strong> Nomor HP / Password Salah';
                    }
                  }
                ?>
 <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Hdwg</span>
          </div>
        </div>

<!--                   <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> -->
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog alert alert-info" role="document">
    <strong>Mohon Maaf </strong> Halaman belum tersedia.
  </div>
</div>

  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../assets/js/sb-admin-2.min.js"></script>

</body>
</html>
