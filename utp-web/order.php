<?php
  include 'koneksi.php';
  $query = mysqli_query($koneksi,"SELECT * FROM `order`");
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
      <h2 class="header-h2">Order</h2>
      <div class="content">
        <table class="order-table">
          <tr>
            <th>Nomor</th>
            <th>Nama Bunga</th>
            <th>Jumlah Pemesanan</th>
          </tr>
          <?php
            $number = 1;
              while ($data  = mysqli_fetch_array($query)) {
          ?>
                <tr>
                  <td align="center"><?php echo $number++ ?></td>
                  <td>               <?php echo $data['namabunga'] ?></td>
                  <td align="center"><?php echo $data['jumlahbunga'] ?></td>
                  <td><a href="add.php?idorder=<?php echo $data['idorder']; ?>">Tambah</a></td>
                  <td><a href="edit.php?idorder=<?php echo $data['idorder'];  ?>">Edit</a></td>
                  <td><a href="delete.php?idorder=<?php echo $data['idorder']; ?>">Hapus</a></td>
                </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </body>
</html>
