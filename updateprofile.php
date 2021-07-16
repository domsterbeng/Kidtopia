<?php
    session_start();
    //step1 : read all the update information from profile.php using $_post method
    $username= $_SESSION['username'];
    $Fullname = $_POST['fname'];
    $phone = $_POST['userphone'];
    $email = $_POST['useremail'];
    $password = $_POST['password'];
    $country = $_POST['country'];



    //step2 :connect to the database
    include "connection.php";


    //step3 : make the update sql query

    $sql ="Update user SET name='$Fullname', contact_number = '$phone', email= '$email', password= '$password', country='$country' WHERE username = '$username'" ;
    $_SESSION['name'] = $Fullname;
    $_SESSION['email'] = $email;
    $_SESSION['contact_number'] = $phone;
    $_SESSION['password'] = $password;
    $_SESSION['country'] = $country;

    //step 4 : execute the query
    mysqli_query($conn,$sql);

    //step5 : check the query successfully or not
    if(mysqli_affected_rows($conn)<=0)
    {
      echo "<script>alert('No data updated');</script>";
      die("<script>window.location.href='profile.php?username=$username';</script>");
    }

    //step 6 : if success alert the success message and go back to the edit page
    echo "<script>alert('sucessfully to update data');</script>";
    die("<script>window.location.href='profile.php?username=$username';</script>");


?>
