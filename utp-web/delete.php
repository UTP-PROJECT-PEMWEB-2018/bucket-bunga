<?php
  include 'koneksi.php';
  $idorder = $_GET['idorder'];
  $delete = mysqli_query($koneksi,
                        "DELETE FROM `order`
                        WHERE idorder='$idorder'");

  if($delete){
    header("location: order.php");
  }
  ?>
