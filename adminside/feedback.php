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
								<li class="Active">
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
                    <a class="navbar-brand" href="#">Feedbacks</a>
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
                           <a href="adminprofile.php">
                               adminname
                            </a>
                        </li>
												<li><a href="../logout.php">(Logout)</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
        $id = $_GET['id'];
        //b. connect to database
        include "../connection.php";
        //c. write the sql query
          $sql = "SELECT * FROM feedback WHERE ID = $id";
          $result = mysqli_query($conn, $sql);

        //e. get the data from the database into array and display in html form
        if ($rows = mysqli_fetch_array($result)) {
         ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Feedbacks</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="row">
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label>ID</label>
                                              <input type="text" class="form-control" name="id" value="<?php echo $rows['ID']; ?>" readonly>
                                          </div>
                                      </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Name</label><br>
                                                <input type="text" class="form-control" name="topic" value="<?php echo $rows['name']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email" value="<?php echo $rows['email']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" class="form-control" name="answer1" value="<?php echo $rows['subject']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sent Date</label>
                                                <input type="text" class="form-control"  name="answer2" value="<?php echo $rows['sent_date']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <input type="text" class="form-control" name="answer3" value="<?php echo $rows['message']; ?>" style="height: 400px;" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="view_feedback.php"><button type="button" class="btn btn-info btn-fill pull-right" style="margin-right: 20px;">Back</button></a>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                  }
                ?>
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


</html>
