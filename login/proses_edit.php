<?php
  include 'koneksi.php';

  $idorder    = $_POST['idorder'];
  $namabunga  = $_POST['namabunga'];
  $jumlahbunga= $_POST['jumlahbunga'];

  $edit = mysqli_query($koneksi,
                        "UPDATE `order`
                        SET namabunga='$namabunga',
                        jumlahbunga='$jumlahbunga'
                        WHERE idorder = '$idorder' ");

  if($edit){
    header("location:order.php");
  }

?>
