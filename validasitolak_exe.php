<?php
include 'koneksi.php';
$kode = $_GET['konper'];

  $query = mysql_query("update pembayaran set status=2 where kodebayar='$kode'");
    if($query){
        echo "<script> alert('Pesanan Ditolak') </script>";
        echo "<meta http-equiv='refresh' content='0 url = validasipembayaran.php'>";
  }else{
        echo "<script> alert('Terjadi Kegagalan') </script>";
        echo "<meta http-equiv='refresh' content='0 url = validasipembayaran.php'>";
    }

?>