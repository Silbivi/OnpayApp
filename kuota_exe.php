<?php
  include 'koneksi.php';

    $kodekuota = $_POST['kodekuota'];
    $transkuota = $_POST['transkuota'];
    $nominalkuota = $_POST['nominalkuota'];


      $sql= mysql_query("INSERT INTO transaksi (kodetrans,jenistrans,nominaltrans) VALUES ('$kodekuota','$transkuota','$nominalkuota')");
      if ($sql) {
         echo "<script> alert('Transaksi Berhasil!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = keranjang.php'>";
      }else{
         echo "<script> alert('ERROR.. Transaksi Gagal!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = transkuota.php'>";
           }
?>