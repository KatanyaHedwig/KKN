<?php
    session_start();
    if (isset($_SESSION['nohp'])) {
        header('location:../../user'); 
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
  <link rel="icon" href="../../media/images/logo/logo1.png">
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="" rel="stylesheet">
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
            <img width="120" height="120" src="" class="custom-logo" >
        </div>
      </a>

      <br><br><br>

<hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="../../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Homepage</span></a>
      </li>

<hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data
      </div>

      <li class="nav-item active">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <img src="../../media/images/icon/menu/user.png" style="width: 20px">
          <span >&nbsp;Daftar KKN</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded" style="background-color: rgb(255,214,0);"> 
            <a class="collapse-item active" href="#">Daftar Peserta</a>
            <a class="collapse-item" href="../signin">Login Peserta</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="content/user" data-toggle="modal" data-target="#exampleModal3">
          <img src="../../media/images/icon/menu/info.png" style="width: 20px">
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
          <a href="../signin">
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

          <div class="container-fluid" style="color: black">
            <?php
              if (isset($_POST['daftar'])) {
                include '../../assets/mysql_connect/koneksi.php';
                  $daftar = mysqli_query($koneksi, "INSERT INTO tb_user VALUES(
                    NULL,
                    '".$_POST['nama']."',
                    '".$_POST['tempat_lahir']."',
                    '".$_POST['tgllahir']."',
                    '".$_POST['jk']."',
                    '".$_POST['agama']."',
                    '".$_POST['nim']."',
                    '".$_POST['fakultas']."',
                    '".$_POST['program_studi']."',
                    '".$_POST['alamat']."',
                    '".$_POST['nohp']."',
                    '".$_POST['alamat_ortu']."',
                    '".$_POST['nohp_ortu']."',
                    '".$_POST['kondisi']."',
                    '".$_POST['status']."',
                    '".$_POST['jumlah_sks']."',
                    '".$_POST['lokasi']."')");                 
                  if ($daftar) {
                    echo '<h3 align="center" class="list-group-item list-group-item-success" >Berhasil Mendaftar</h3>';
                  }else{
                    echo '<h3 align="center" class="list-group-item list-group-item-Danger" >Pendaftaran Gagal </h3>'; 
                  }
                }
            ?>
          <br>
        <div class="wrapper wrapper--w960">
            <div class="card card-2">

                <div class="card-body">
                    <h2 class="title" align="center">Formulir Pendaftaran KKN</h2>
                    <form method="POST">
                        <div class="input-group" >
                            <input class="input--style-2" type="text" placeholder="Nama Lengkap Mahasiswa"  name="nama" required/>
                        </div>
                        <div class="row row-space">
                          <div class="input-group col-4">
                                <input class="input--style-2" type="text" placeholder="Tempat Lahir" name="tempat_lahir" required/>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" id="datepicker" type="text" placeholder="Tanggal Lahir" name="tgllahir" required/>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group rs-select2 js-select-simple select--no-search ">
                                    <select name="jk" required/>
                                        <option disabled="disabled" selected="selected">Jenis Kelamin</option>
                                        <option>Laki -Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                          <div class="col-6">
                            <div class="input-group rs-select2 js-select-simple select--no-search">
                                <select name="agama" required/>
                                    <option disabled="disabled" selected="selected">Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katholik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Kong Hu Chu</option>
                                    <option>Kepercayaan Lainnya</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                          </div>
                          <div class="col-6">
                            <input class="input-group input--style-2" type="number"  placeholder="Nomor Induk Mahasiswa" name="nim" required min="5" maxlength="11"/>
                          </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group rs-select2 js-select-simple select--no-search">
                                  <select name="fakultas" required/>
                                    <option disabled="disabled" selected="selected">Fakultas</option>
                                      <option>Fakultas Teknologi Informasi</option>
                                      <option>Fakultas Teknik</option>
                                      <option>Fakultas Psikologi</option>
                                      <option>Fakultas Ekonomi dan Bisnis</option>
                                      <option>Fakultas Ilmu Sosial dan Politik</option>
                                      <option>Fakultas Hukum</option>
                                      <option>Fakultas Pariwisata</option>
                                  </select>
                                <div class="select-dropdown"></div>
                            </div>

                            </div>
                            <div class="col-6">
                                    <div class="input-group rs-select2 js-select-simple select--no-search">
                                        <select name="program_studi" required/>
                                            <option disabled="disabled" selected="selected">Program Studi</option>
                                            <option>S1 Teknik Industri</option>
                                            <option>S1 Psikologi</option>
                                            <option>S1 Hukum</option>
                                            <option>S1 Sistem Informasi</option>
                                            <option>S1 Administrasi Publik</option>
                                            <option>S1 Arsitektur</option>
                                            <option>S1 Teknik Sipil</option>
                                            <option>S1 Manajemen</option>
                                            <option>S1 Ekonomi Pembangunan</option>
                                            <option>S1 Teknik Elektro</option>
                                            <option>S1 Ilmu Komunikasi</option>
                                            <option>S1 Akuntansi</option>
                                            <option>S1 Teknik Mesin</option>
                                            <option>S1 Ilmu Administrasi Bisnis</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="row row-space">
                          <div class="input-group col-7">
                            <input class="input--style-2" type="text" placeholder="Alamat di Malang" name="alamat" required/>
                          </div>
                          <div class="input-group col-4">
                            <input class="input--style-2" type="number" placeholder="Nomor HP / WhatsApp (Aktif)" name="nohp" required maxlength="15"/>
                          </div>
                        </div>
                        <div class="row row-space">
                          <div class="input-group col-7">
                            <input class="input--style-2" type="text" placeholder="Alamat Orang Tua" name="alamat_ortu" required/>
                          </div>
                          <div class="input-group col-4">
                            <input class="input--style-2" type="number" placeholder="Nomor HP Orang Tua" name="nohp_ortu" required maxlength="15"/>
                          </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group rs-select2 js-select-simple select--no-search">
                                  <select name="kondisi" required/>
                                    <option disabled="disabled" selected="selected">Kondisi Kesehatan</option>
                                      <option>Sehat</option>
                                      <option>Mengidap Penyakit atau Yang Perlu Perawatan Khusus</option>
                                  </select>
                                <div class="select-dropdown"></div>
                            </div>

                            </div>
                          </div>
                          <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group rs-select2 js-select-simple select--no-search">
                                  <select name="status" required/>
                                    <option disabled="disabled" selected="selected">Status Mahasiswa</option>
                                      <option>Biasa</option>
                                      <option>Berkeluarga (dilampiri Surat Nikah)</option>
                                      <option>Pegawai / Karyawan (dilampiri Surat Keterangan Kerja)</option>
                                  </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>
                          </div>
                          <div class="row row-space">
                          <div class="input-group col-12">
                            <input class="input--style-2" type="number" placeholder="Jumlah SKS Lulus" name="jumlah_sks" required maxlength="3"/>
                          </div>
                        </div>
                        <div class="row row-space">
                        <div class="input-group col-12">
                                    <div class="input-group rs-select2 js-select-simple select--no-search">
                                        <select name="lokasi" required/>
                                            <option disabled="disabled" selected="selected">Lokasi KKN</option>
                                            <option>Sumbermanjing Wetan</option>
                                            <option>Sumber Brantas</option>
                                            <option>Arjowinangun</option>
                                            <option>Ampelgading</option>
                                            <option>Gondanglegi</option>
                                            <option>Sekarrindu</option>
                                            <option>Purworejo</option>
                                            <option>Purwosari</option>
                                            <option>Purwodadi</option>
                                            <option>Kalipare</option>
                                            <option>Lawang</option>
                                            <option>Trawas</option>
                                            <option>Cangar</option>
                                            <option>Dampit</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="p-t-12">
                                <input class="btn btn--radius btn--green" type="submit" name="daftar" value="Daftar" style="width: 800px;" />
                            </div>
                    </form>

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


    </div>
    

  </div>



  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- JavaScript-->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../assets/js/sb-admin-2.min.js"></script>
  <script src="../../assets/vendor/select2/select2.min.js"></script>
  <script src="../../assets/vendor/datepicker/moment.min.js"></script>
  <script src="../../assets/vendor/datepicker/daterangepicker.js"></script>
  <script src="../../assets/vendor/global.js"></script>
</body>
</html>
