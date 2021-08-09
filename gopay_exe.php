<?php
  include 'koneksi.php';

    $kodegopay = $_POST['kodegopay'];
    $transgopay = $_POST['transgopay'];
    $nominalgopay = $_POST['nominalgopay'];


      $sql= mysql_query("INSERT INTO transaksi (kodetrans,jenistrans,nominaltrans) VALUES ('$kodegopay','$transgopay','$nominalgopay')");
      if ($sql) {
         echo "<script> alert('Transaksi Berhasil!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = keranjang.php'>";
      }else{
         echo "<script> alert('ERROR.. Transaksi Gagal!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = transgopay.php'>";
           }
?>