<?php
  //1. Get the id from the url
  $id = $_GET['id'];
  //2. Start the delete stage (step by step)
    //a. connect to database
    include "../connection.php";
    //b. write sql query for delete action
    $sql = "DELETE FROM feedback WHERE ID = $id";
    //c. execute the sql query
    mysqli_query($conn, $sql);
    //d. check for the delete result from the sql query
    if (mysqli_affected_rows($conn) == 0) {
      //e. incorrect - come out error message
      echo "<script>alert('Unable to delete date');</script>";
    }
    else {
      //f. correct - success message
      echo "<script>alert('Data deleted!');</script>";
    }
    //g. end..transfer back to  (previouse page)
    echo "<script>window.history.go(-1);</script>";
?>
