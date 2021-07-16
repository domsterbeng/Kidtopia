<?php
  include "connection.php";

  //Retrieve input datas
  $name = mysqli_real_escape_string($conn, $_POST['nameInput']);
  $email = mysqli_real_escape_string($conn, $_POST['emailInput']);
  $subject = mysqli_real_escape_string($conn, $_POST['subjectInput']);
  $message = mysqli_real_escape_string($conn, $_POST['messageInput']);

  $sql = "INSERT INTO feedback (name, email, subject, message, sent_date) VALUES ('$name', '$email', '$subject', '$message', Now());";
  mysqli_query($conn, $sql);

  if (mysqli_affected_rows($conn) <= 0) {
    echo "<script>alert('Unable to provide feedback! Check your details again!');";
    die("window.history.go(-1);</script>");
  }
  else {
    echo "<script>alert('Thank you for your feedback!');</script>";
    echo "<script>window.location.href='contactus.php';</script>";
  }

 ?>
