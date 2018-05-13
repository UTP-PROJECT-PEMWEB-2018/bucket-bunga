<?php
include 'koneksi.php';
$iduser = $_POST['iduser'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,
                      "SELECT * FROM `user`
                      WHERE username='$username' and password='$password'")
         or die ("username atau password salah");
$result = mysqli_num_rows($query);

if($result>0){
  header("location:profil.php");
}
else {
  header("location:login.php");
}
?>
