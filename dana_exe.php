<?php
  include 'koneksi.php';

    $kodedana = $_POST['kodedana'];
    $transdana = $_POST['transdana'];
    $nominaldana = $_POST['nominaldana'];


      $sql= mysql_query("INSERT INTO transaksi (kodetrans,jenistrans,nominaltrans) VALUES ('$kodedana','$transdana','$nominaldana')");
      if ($sql) {
         echo "<script> alert('Transaksi Berhasil!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = keranjang.php'>";
      }else{
         echo "<script> alert('ERROR.. Transaksi Gagal!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = trandana.php'>";
           }
?>