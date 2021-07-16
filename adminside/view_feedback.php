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
								<li class="">
                    <a href="adminindex.php">
                        <i class="pe-7s-upload"></i>
                        <p>Upload Questions</p>
                    </a>
                </li>
								<li class="">
                    <a href="manage_questions.php">
                        <i class="pe-7s-note2"></i>
                        <p>Manage Questions</p>
                    </a>
                </li>
								<li class="active">
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
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">View Feedback</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                          <a>
                              <?php echo $_SESSION['name']; ?>
                           </a>
                        </li>
												<li><a href="../logout.php">(Logout)</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-9">
                  <input type="text" name="search" id="myInput" placeholder="Type to Search..." style="width: 100%; margin-bottom: 30px;">
                </div>
              </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card2">
                            <div class="header">
                                <h4 class="title">List of Feedbacks</h4>
                            </div>
                            <div class="content table-responsive table-full-width" id="myTable">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>ID</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Subject</th>
                                      <th>Sent Date</th>
                                      <th>Action</th>
                                    </thead>
                                    <tbody>

                                      <?php

                                        $sql = "SELECT * FROM feedback";
                                        $result = mysqli_query($conn, $sql); //execute the sql

                                        //all data store in variable $result
                                        if (mysqli_num_rows($result) <= 0) { //if no result
                                          die("<script>alert('No data from database!');</script>");
                                        }

                                        //if got results, extract the data from $result trough one by one columns
                                        while ($rows = mysqli_fetch_array($result)) { //fetch inside an array name as row
                                          echo "<tr>";
                                          echo "<td>".$rows['ID']."</td>";
                                          echo "<td>".$rows['name']."</td>";
                                          echo "<td>".$rows['email']."</td>";
                                          echo "<td>".$rows['subject']."</td>";
                                          echo "<td>".$rows['sent_date']."</td>";
                                          echo "<td><a href= 'feedback.php? id=".$rows['ID']."'>";
                                          echo "<button>View</button></a>";
                                          echo "<td><a href= 'deletefeedback.php? id=".$rows['ID']."'>";
                                          echo "<button>Delete</button></a>";
                                          echo "</tr>";
                                          }



                                          ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<script src="assets/js/demo.js"></script>

  <script>
  var $rows = $('#myTable tr');
  $('#myInput').keyup(function() {
      var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

      $rows.show().filter(function() {
          var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
          return !~text.indexOf(val);
      }).hide();
  });
  </script>

</html>
