<?php
    include 'koneksi.php';
    
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $sql = mysql_query("SELECT * FROM register WHERE username = '$username' AND password = '$password'");
      $data = mysql_fetch_array($sql);

            $username = $data['username'];
            $password = $data['password'];
            $bagian = $data['bagian'];

        if ($username=$data['username'] AND $password=$data['password']) {
          if($bagian=='Admin'){
                    echo "<script>alert('Anda berhasil Login. Sebagai : $bagian');</script>";
                    echo "<meta http-equiv='refresh' content='0; url=validasipembayaran.php'>";
                }else{
                    echo "<script>alert('Anda berhasil Login. Sebagai : $bagian'');</script>";
                    echo "<meta http-equiv='refresh' content='0; url=cusindex.html'>";
                }
            }else{
                echo "<meta http-equiv='refresh' content='0; url=akun.php'>";
                echo "<script>alert('Maaf Anda Tidak Terdaftar<br>Silahkan Register Terlebih Dahulu');</script>";
            }
?>