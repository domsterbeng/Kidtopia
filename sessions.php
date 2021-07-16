<?php
  if(!isset($_SESSION['username']))
  {
    die("<script>alert('Please login first before proceed to here');window.location.href='index.php'</script>");
  }
?>
