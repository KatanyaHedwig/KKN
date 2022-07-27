<?php
  session_start(); 
  if (isset($_SESSION['nohp'])) {
      echo '';
  }else{
      header('location:../../content/signin'); 
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
    <link href="../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="../../assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link href="../../assets/css/main.css" rel="stylesheet" media="all">
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
                <a class="dropdown-item" href="../../info">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
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

       <div class="wrapper wrapper--w960">
            <div class="card card-2">

                <div class="card-body">
                    <h2 class="title" align="center">Formulir Pendaftaran KKN</h2>
                    <form method="POST">
                        <div class="input-group" >
                            <input class="input--style-2" type="text" name="nama" required disabled placeholder="<?php echo $_SESSION['nama'];?> " /> 
                            
                        </div>
                        <div class="row row-space">
                          <div class="input-group col-4">
                                <input class="input--style-2" type="text" name="tempat_lahir" required disabled placeholder="<?php echo $_SESSION['tempat_lahir'];?> " />
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="text" name="tgllahir" required disabled placeholder="<?php echo $_SESSION['tgllahir'];?> " />
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group rs-select2 js-select-simple select--no-search ">
                                  <input class="input--style-2" type="text" name="jk" required disabled placeholder="<?php echo $_SESSION['jk'];?> " />
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                          <div class="col-6">
                            <div class="input-group rs-select2 js-select-simple select--no-search ">
                              <input class="input--style-2" type="text" name="agama" required disabled placeholder="<?php echo $_SESSION['agama'];?> " />
                            </div>
                          </div>
                          <div class="col-6">
                            <input class="input--style-2" type="text" name="nim" required disabled placeholder="<?php echo $_SESSION['nim'];?> " />
                          </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-6">
                                <input class="input--style-2" type="text" name="fakultas" required disabled placeholder="<?php echo $_SESSION['fakultas'];?> " />

                            </div>
                            <div class="col-6">
                                    <input class="input--style-2" type="text" name="program_studi" required disabled placeholder="<?php echo $_SESSION['program_studi'];?> " />
                                </div>
                        </div>
                        <br>
                        <div class="row row-space">
                          <div class="input-group col-7">
                            <input class="input--style-2" type="text" name="alamat" required disabled placeholder="<?php echo $_SESSION['alamat'];?> " />
                          </div>
                          <div class="input-group col-4">
                            <input class="input--style-2" type="text" name="nohp" required disabled placeholder="<?php echo $_SESSION['nohp'];?> " />
                          </div>
                        </div>
                        <div class="row row-space">
                          <div class="input-group col-7">
                            <input class="input--style-2" type="text" name="alamat_ortu" required disabled placeholder="<?php echo $_SESSION['alamat_ortu'];?> " />
                          </div>
                          <div class="input-group col-4">
                            <input class="input--style-2" type="text" name="nohp_ortu" required disabled placeholder="<?php echo $_SESSION['nohp_ortu'];?> " />
                          </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-12">
                                <input class="input--style-2" type="text" name="kondisi" required disabled placeholder="<?php echo $_SESSION['kondisi'];?> " />
                            </div>
                          </div>
                          <br>
                          <div class="row row-space">
                            <div class="col-12">
                                <input class="input--style-2" type="text" name="status" required disabled placeholder="<?php echo $_SESSION['status'];?> " />
                            </div>
                          </div>
                          <br>
                          <div class="row row-space">
                          <div class="input-group col-12">
                            <input class="input--style-2" type="text" name="jumlah_sks" required disabled placeholder="<?php echo $_SESSION['jumlah_sks'];?> " />
                          </div>
                        </div>
                        <br>
                        <div class="row row-space">
                          <div class="input-group col-12">
                            <input class="input--style-2" type="text" name="lokasi" required disabled placeholder="<?php echo $_SESSION['lokasi'];?> " />
                          </div>
                        </div>
                        <div class="p-t-30">
                          <input class="btn-primary" style="width: 1000px;height: 40px" type="button" value="Edit Data" data-toggle="modal" data-target=".bd-example-modal-lg">
                        </div>

                    </form>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                         aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg alert alert-danger">
                        <p align="center" style="font-size: 15px"><strong>Peringatan!!!</strong> Silahkan hubungi Administrator untuk mengedit data.</p>
                      </div>
                    </div>
                </div>
            </div>
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
    <script src="../../assets/vendor/select2/select2.min.js"></script>
  <script src="../../assets/vendor/datepicker/moment.min.js"></script>
  <script src="../../assets/vendor/datepicker/daterangepicker.js"></script>
  <script src="../../assets/js/global.js"></script>

</body>
</html>
