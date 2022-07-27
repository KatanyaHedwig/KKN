<?php
  session_start(); 
  if (isset($_SESSION['nohp'])) {
      echo '';
  }else{
      header('location:../signin'); 
  }
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Website KKN Universitas Merdeka Malang</title>
  <link rel="icon" href="../../media/images/logo/logo1.png">
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(51,45,43);">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://unmer.ac.id/">
        <div class="sidebar-brand-text mx-3">
          <br><br><br>
            <img width="120" height="120" src="../../media/images/logo/unmer.png" class="custom-logo" >
        </div>

      </a>

      <br><br><br>

<hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="../../user">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Homepage</span></a>
      </li>

<hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data
      </div>

      <li class="nav-item active">
        <a class="nav-link" href="../../content/informasi">
          <img src="../../media/images/icon/menu/info.png" style="width: 20px">
          <span>&nbsp;Informasi KKN</span></a>
      </li>

<hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>

<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <form class="d-none d-sm-inline-block form-inline">
            <div class="input-group">
               <h3 class="" style="color:black">KKN Tematik Universitas Merdeka Malang</h3>
              <div class="input-group-append">
              </div>
            </div>
          </form>

          <ul class="navbar-nav ml-auto">

            
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                <div class="sidebar-brand-text mx-3" style="font-size: 15px">Selamat Datang
                  <b>
                <?php 
                  if (isset($_SESSION['nohp'])) {
                    echo $_SESSION['nama'];
                  }else{
                   header('location:../signin'); 
                }
                ?>
              </b>
              </div>
              </span>
                <img class="img-profile rounded-circle" src="../../media/images/users/icon.png">
              </a>
              
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../../user/profile">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../user/logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

        <div class="container">
          <div class="card">
            <img width="20%" class="card-img-top" src="../../media/images/docs/0001.jpg" alt="Card image cap">
            <div class="card-body"> Informasi KKN </div>
            <input type="button" value="Download PDF" onclick="location.href='https://www.dropbox.com/s/7ftf05id7c2qehn/KKN%20TEMATIK%20GENAP%202019-2020.pdf?dl=0'" >
            <br>
          </div>
        </div>

        <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Hdwg</span>
          </div>
        </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../assets/js/sb-admin-2.min.js"></script>

</body>
</html>
