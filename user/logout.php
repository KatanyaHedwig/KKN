<?php
include '../assets/mysql_connect/koneksi.php';
session_start();
session_destroy();
header('location:../');
?>