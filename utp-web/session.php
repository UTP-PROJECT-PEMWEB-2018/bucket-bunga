<?php
  include 'koneksi.php';
  session_start();
  $user_check=$_SESSION['username'];
  $ses_query=mysqli_query($koneksi,"SELECT username FROM user WHERE username='$user_check'");
  $row=mysqli_fetch_assoc($ses_query);
  $login_session=$row['username'];

  if(!isset($login_session)){
    header('location:login.php');
  }
 ?>
