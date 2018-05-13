<?php
  include 'koneksi.php';
  $idorder = $_GET['idorder'];
  $query = mysqli_query($koneksi,"SELECT * FROM `order` WHERE idorder='$idorder'");
  $data = mysqli_fetch_assoc($query);
 ?>


 <html>
   <head>
     <link rel="stylesheet" href="style-buketbunga.css" />
   </head>
   <body>
     <form class="login-form" action="proses_edit.php" method="post">
       <input type="text" class="login-in" name="idorder" placeholder="Nomor" value="<?php echo $data['idorder']; ?>"><br>
       <input type="text" class="login-in" name="namabunga" placeholder="Nama Bunga" value="<?php echo $data['namabunga']; ?>"><br>
       <input type="text" class="login-in" name="jumlahbunga" placeholder="Jumlah Pemesanan" value="<?php echo $data['jumlahbunga']; ?>"><br>
       <input type="submit" class="login-btnin" name="edit" value="Edit">
     </form>
   </body>
 </html>
