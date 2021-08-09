<?php
  include 'koneksi.php';
  $nohp = $_POST['nomer'];
    $nama = $_POST['nm'];
    $email = $_POST['mail'];
    $bagian = $_POST['bagian'];
    $user = $_POST['usr'];
    $pass = $_POST['pass'];


  $query = mysql_query("UPDATE register SET nama='$nama', email='$email', bagian='$bagian', username='$user', password='$pass' WHERE nohp='$nohp'");
  if($query){
    echo "<script> alert('Berhasil Mengedit Data') </script>";
    echo "<meta http-equiv='refresh' content='0 url = profilcus.php'>";
  }else{
        echo "<script> alert('Gagal Mengedit Data') </script>";
        echo "<meta http-equiv='refresh' content='0 url = editcus_exe.php'>";
  }

?>
