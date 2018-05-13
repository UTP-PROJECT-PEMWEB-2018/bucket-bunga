<?php
  include 'koneksi.php';
  $namabunga = $_POST['namabunga'];
  $jumlahbunga = $_POST['jumlahbunga'];
  $input = mysqli_query($koneksi,
                        "INSERT INTO `order`(namabunga,jumlahbunga)
                        VALUES('$namabunga','$jumlahbunga')");

  if($input){
    header("location: order.php");
  }
  else{
    header("location: add.php");
  }
 ?>
