<?php
  include 'koneksi.php';
  $Kodetrans=$_GET['kodet'];
  $sql= mysql_query("delete from transaksi where kodetrans='$Kodetrans'");
  if ($sql) {
    echo "<script> alert('Data Berhasil Di Hapus')</script>";
    echo "<meta http-equiv='refresh' content='0 url = keranjang.php'>";
  }
?>
