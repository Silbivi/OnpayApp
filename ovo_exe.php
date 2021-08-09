<?php
  include 'koneksi.php';

    $kodeovo = $_POST['kodeovo'];
    $transovo = $_POST['transovo'];
    $nominalovo = $_POST['nominalovo'];


      $sql= mysql_query("INSERT INTO transaksi (kodetrans,jenistrans,nominaltrans) VALUES ('$kodeovo','$transovo','$nominalovo')");
      if ($sql) {
         echo "<script> alert('Transaksi Berhasil!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = keranjang.php'>";
      }else{
         echo "<script> alert('ERROR.. Transaksi Gagal!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = transovo.php'>";
           }
?>