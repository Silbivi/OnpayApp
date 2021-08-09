<?php
  include 'koneksi.php';

    $kodetrans = $_POST['kodetrans'];
    $kodebayar = $_POST['kodebayar'];
    $nominal = $_POST['nominal'];
	$metbayartrans = $_POST['metbayartrans'];

      $sql= mysql_query("INSERT INTO pembayaran (kodetransaksi,kodebayar,nominal,metodebayar) VALUES ('$kodetrans','$kodebayar','$nominal','$metbayartrans')");
      if ($sql) {
         echo "<script> alert('Pembayaran Berhasil!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = keranjang.php'>";
      }else{
         echo "<script> alert('ERROR.. Pembayaran Gagal!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = pembayaran.php'>";
           }
?>