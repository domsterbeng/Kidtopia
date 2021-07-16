<?php
  session_start();
  include "../connection.php";
 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Kidtopia Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-4.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a  class="simple-text">
                    Kidtopia
                </a>
            </div>

            <ul class="nav">
				<!-- <li>
                    <a href="adminindex.php">
                        <i class="pe-7s-upload"></i>
                        <p>Create Quizes</p>
                    </a>
                </li>
				<li>
                    <a href="managequizes.php">
                        <i class="pe-7s-note2"></i>
                        <p>Manage Quizes</p>
                    </a>
                </li> -->
				<li>
                    <a href="adminindex.php">
                        <i class="pe-7s-upload"></i>
                        <p>Create Questions</p>
                    </a>
                </li>
								<li class="">
                    <a href="manage_questions.php">
                        <i class="pe-7s-note2"></i>
                        <p>Manage Questions</p>
                    </a>
                </li>
								<li class="">
                    <a href="view_feedback.php">
                        <i class="pe-7s-note2"></i>
                        <p>View Feedback</p>
                    </a>
                </li>
                <li class="">
                    <a href="manage_user.php">
                        <i class="pe-7s-note2"></i>
                        <p>Manage User</p>
                    </a>
                </li>
                <li class="">
                    <a href="view_results.php">
                        <i class="pe-7s-note2"></i>
                        <p>View Results</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">