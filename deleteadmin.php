<?php
  include 'koneksi.php';
  $nohp=$_GET['nomer'];
  $sql= mysql_query("delete from register where nohp='$nohp'");
  if ($sql) {
    echo "<script> alert('Data Berhasil Di Hapus')</script>";
    echo "<meta http-equiv='refresh' content='0 url = profiladmin.php'>";
  }
?>
