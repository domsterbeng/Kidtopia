<?php
  session_start();

  echo "<script>alert('Logout sucessfully! See you again!');</script>";
  echo "<script>window.location.href='index.php';</script>";

  session_destroy();


 ?>
