<?php
  session_start();
  include "connection.php";
  $username = mysqli_real_escape_string($conn,$_POST['user']);
  $password = mysqli_real_escape_string($conn,$_POST['pass']);
  $sql = "SELECT * FROM user WHERE username = '".$username."' and password = '".$password."'";
  $result = mysqli_query($conn,$sql);




   if(mysqli_num_rows($result)<=0)
   {
       $sql = "SELECT * FROM user WHERE username = '".$username."' and password = '".$password."'";
       $result = mysqli_query($conn,$sql);

         if(mysqli_num_rows($result)<=0)
         {
             echo "<script>alert('Wrong username / password');";
             die("window.history.go(-1);</script>");
         }
   }


   if($row=mysqli_fetch_array($result))
   {
      $_SESSION['username'] = $row['username']; //user Session
      $_SESSION['password'] = $row['password'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['role'] = $row['role'];
      $_SESSION['userid'] = $row['userid'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['contact_number'] = $row['contact_number'];
      $_SESSION['dob'] = $row['dob'];
      $_SESSION['country'] = $row['country'];


   }

   if($_SESSION['role']==="1")
   {
       echo"<script>alert('Welcome back! ".$_SESSION['name']."');";
       echo"window.location.href='menu.php';</script>";
   }

   else if($_SESSION['role']==="0")
   {
       echo"<script>alert('Welcome back! admin');";
       echo"window.location.href='adminside/adminindex.php';</script>";
   }

   else
   {
       echo "window.location.href='login.php';</script>";
   }


 ?>
