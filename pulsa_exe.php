<?php
  include 'koneksi.php';

    $kodepulsa = $_POST['kodepulsa'];
    $transpulsa = $_POST['transpulsa'];
    $nominalpulsa = $_POST['nominalpulsa'];


      $sql= mysql_query("INSERT INTO transaksi (kodetrans,jenistrans,nominaltrans) VALUES ('$kodepulsa','$transpulsa','$nominalpulsa')");
      if ($sql) {
         echo "<script> alert('Transaksi Berhasil!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = keranjang.php'>";
      }else{
         echo "<script> alert('ERROR.. Transaksi Gagal!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = transpulsa.php'>";
           }
?>