<?php
  $conn = mysqli_connect("localhost", "root", "root", "kidtopia");

  if (mysqli_connect_errno()) {
    die("<script> alert('Error in connection!'); </script>");
  }
?>
