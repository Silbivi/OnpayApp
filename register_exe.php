<?php
  include 'koneksi.php';

    $nama = $_POST['fullname'];
    $email = $_POST['email'];
    $telepon = $_POST['tlp'];
    $bagian = $_POST['bagian'];
    $user = $_POST['usr'];
    $pass = $_POST['psw'];


      $sql= mysql_query("INSERT INTO register (nama,email,nohp,bagian,username,password) VALUES ('$nama','$email','$telepon','$bagian','$user','$pass')");
      if ($sql) {
         echo "<script> alert('Register Berhasil!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = akun.html'>";
      }else{
         echo "<script> alert('ERROR.. Register Gagal!')</script>";
         echo "<meta http-equiv='refresh' content='0 url = akun.html'>";
           }
?>