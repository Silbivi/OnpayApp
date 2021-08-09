<?php
include 'koneksi.php';
$kode = $_GET['konper'];

  $query = mysql_query("update transaksi set statuss=1 where kodetrans='$kode'");
    if($query){
       echo "<script> alert('Pesanan Berhasil Dibayar') </script>";
        echo "<meta http-equiv='refresh' content='0 url = keranjang.php'>"; 
  }else{
        echo "<script> alert('Terjadi Kegagalan') </script>";
        echo "<meta http-equiv='refresh' content='0 url = pembayaran.php'>";
    }

?>