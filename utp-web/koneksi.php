<?php
  $host = "localhost";
  $username = "root";
  $password ="";
  $db = "buketbunga";
  $koneksi = mysqli_connect($host,$username,$password,$db);

  if(mysqli_connect_errno())
    echo "Koneksi gagal".mysqli_connect_error();
?>
