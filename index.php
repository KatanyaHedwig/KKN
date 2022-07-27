<?php
    session_start();
    if (isset($_SESSION['nohp'])) {
        header('location:user'); 
    }else{
        echo'';
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
  <link rel="icon" href="media/images/logo/logo1.png">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(51,45,43);">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://unmer.ac.id/">
        <div class="sidebar-brand-text mx-3">
          <br><br><br>
            <img width="120" height="120" src="media/images/logo/unmer.png" class="custom-logo" >
        </div>
      </a>

      <br><br><br>

<hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Homepage</span></a>
      </li>

<hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <img src="media/images/icon/menu/user.png" style="width: 20px">
          <span>&nbsp;Daftar KKN</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded" style="background-color: rgb(255,214,0);"> 
            <a class="collapse-item" href="content/signup">Daftar Peserta</a>
            <a class="collapse-item" href="content/signin">Login Peserta</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="content/user" data-toggle="modal" data-target="#exampleModal3">
          <img src="media/images/icon/menu/info.png" style="width: 20px">
          <span>&nbsp;Informasi KKN</span></a>
      </li>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="list-group-item-danger">
        
         <div class="modal-body">
        <strong>Peringatan,</strong> Anda harus login terlebih dahulu!!</h5>
      </div>
        <div class="modal-footer">
          <a href="content/signin">
            <button type="button" class="btn btn-primary">Login</button>
          </a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
</div>

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
        </nav>
    </div>

    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block w-100" src="media/images/background/unmer.jpg" data-src="holder.js/900x400?theme=social" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="media/images/background/rektorat.jpg" data-src="holder.js/900x400?theme=industrial" alt="Second slide" style="height: 554px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Hdwg</span>
          </div>
        </div>
      </footer>
    

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/js/sb-admin-2.min.js"></script>
</body>
</html>
