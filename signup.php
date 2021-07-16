<?php

    include "connection.php";

    //retrieve data from register.html
    $fullname = mysqli_real_escape_string($conn,$_POST['fname']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['useremail']);
    $phone = mysqli_real_escape_string($conn,$_POST['userphone']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $DOB = mysqli_real_escape_string($conn,$_POST['DOB']);
    $country = mysqli_real_escape_string($conn,$_POST['country']);
    $exist = mysqli_query($conn, "Select * from user where username ='$username'");

    if(mysqli_num_rows($exist)>0){
      echo "<script>alert('Your username already register, please input other username');";
      die ("window.history.go(-1);</script>");
    }


    $sql = "Insert into user (name, username, email, 	contact_number,	password, country, dob,	register_date) VALUES ('$fullname','$username','$email','$phone', '".md5($password)."', '$country', '$DOB',now());";
    mysqli_query($conn, $sql);


    echo $sql;
    if(mysqli_affected_rows($conn)<=0)
    {
      echo "<script>alert('Unable to register! \\nPlease Try Again!');";
           die ("window.history.go(-1);</script>");

    }

    echo "<script>alert('Register Successfully');";
    echo "window.location.href='index.php';</script>";
?>
