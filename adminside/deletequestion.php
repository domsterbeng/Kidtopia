<?php

include "../connection.php";

  //1. Get the id from the url
  $id = $_GET['id'];
  $sql = "DELETE FROM questions WHERE ID = $id";
  mysqli_query($conn, $sql);

  //d. check for the delete result from the sql query
  if (mysqli_affected_rows($conn) == 0) {
    //e. incorrect - come out error message
    echo "<script>alert('Unable to delete data');</script>";
  }
  else {
    //f. correct - success message
    echo "<script>alert('Data deleted!');</script>";
  }
  //g. end..transfer back to (previouse page)
  echo "<script>window.history.go(-1);</script>";
?>
