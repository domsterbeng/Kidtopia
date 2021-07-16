<?php include ("layouts/header.php"); ?>
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Manage Questions</a>
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
                            <h4 class="title">List of Questions</h4>
                        </div>
                        <div class="content table-responsive table-full-width" id="myTable">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Topic</th>
                                    <th>Age Range</th>
                                    <th>Question</th>
                                    <th>Answer 1</th>
                                    <th>Answer 2</th>
                                    <th>Answer 3</th>
                                    <th>Answer 4</th>
                                    <th>Correct Answer</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>

                                    <?php

                                    $sql = "SELECT quiz.Topic, quiz.Age, questions.* FROM questions INNER JOIN quiz ON questions.QuizId = quiz.ID";
                                    // $sql = "SELECT * FROM questions";
                                    $result = mysqli_query($conn, $sql); //execute the sql

                                    //all data store in variable $result
                                    if (mysqli_num_rows($result) <= 0) { //if no result
                                        die("<script>alert('No data from database!');</script>");
                                    }

                                    //if got results, extract the data from $result trough one by one columns
                                    while ($rows = mysqli_fetch_array($result)) { //fetch inside an array name as row
                                        echo "<tr>";
                                        echo "<td>".$rows['Topic']."</td>";
                                        echo "<td>".$rows['Age']."</td>";
                                        echo "<td>".$rows['Question']."</td>";
                                        echo "<td>".$rows['Answer1']."</td>";
                                        echo "<td>".$rows['Answer2']."</td>";
                                        echo "<td>".$rows['Answer3']."</td>";
                                        echo "<td>".$rows['Answer4']."</td>";
                                        echo "<td>".$rows['CorrectAnswer']."</td>";
                                        echo "<td><a href= 'editquestion.php?id=".$rows['ID']."'>";
                                        echo "<button>Edit</button></a>";
                                        echo "<td><a href= 'deletequestion.php?id=".$rows['ID']."'>";
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
  var $rows = $('#myTable tbody tr');
  $('#myInput').keyup(function() {
      var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

      $rows.show().filter(function() {
          var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
          return !~text.indexOf(val);
      }).hide();
  });
  </script>

</html>
