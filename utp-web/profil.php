<?php
  include 'koneksi.php';
  #$iduser = $_GET['iduser'];
  $iduser = (isset($_GET['iduser']));
  $query = mysqli_query($koneksi,"SELECT * FROM `user` WHERE iduser='$iduser'");
  $data = mysqli_fetch_assoc($query);

?>

<html>
  <head>
    <link rel="stylesheet" href="style-buketbunga.css">
  </head>
  <body>
    <div class="sidebar">
      <h3 class="sidebar-h3">MENU</h3><br>
      <a class="sidebar-a" href="profil.php">Profil</a><br>
      <a class="sidebar-a" href="order.php">Order</a><br>
      <a class="sidebar-a" href="login.php">Logout</a>
    </div>
    <div class="page-content">
      <h2 class="header-h2">Profil</h2>
      <div class="content">
        <table class="profil-table">
          <tr>
            <td style="width:120px;">Id User</td>
            <td class="login-in" style="width:200px;"><?php echo $data['iduser']; ?>1</td>
          <tr>
            <td>Nama Lengkap</td>
            <td class="login-in"><?php echo $data['namalengkap']; ?>Siti Dewi Utami</td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td class="login-in"><?php echo $data['jeniskelamin']; ?>Perempuan</td>
          </tr>
        </table>
        <!-- <input class="profil-btnin" type="submit" name="login" value="Edit"/> -->
      </div>
    </div>
  </body>
</html>
