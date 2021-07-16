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
            <a class="navbar-brand" href="#">Edit Questions</a>
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
                <li>
                    <a href="../logout.php">(Logout)</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
    $id = $_GET['id'];
    $sql = "SELECT quiz.Topic, quiz.Age, questions.* FROM questions INNER JOIN quiz ON questions.QuizId = quiz.ID WHERE questions.ID = $id";
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
                        <h4 class="title">Edit Questions</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="updatequestion.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input type="text" class="form-control" name="id" value="<?php echo $rows['ID']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Quiz</label>
                                        <br>
                                        <input type="text" class="form-control" name="quiz" value="<?=$rows['Topic'] . ' (Age:' . $rows['Age'] . ')'?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Question</label>
                                        <input type="text" class="form-control" name="question" value="<?php echo $rows['Question']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 1</label>
                                        <input type="text" class="form-control" name="answer1" value="<?php echo $rows['Answer1']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 2</label>
                                        <input type="text" class="form-control" name="answer2" value="<?php echo $rows['Answer2']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 3</label>
                                        <input type="text" class="form-control" name="answer3" value="<?php echo $rows['Answer3']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 4</label>
                                        <input type="text" class="form-control" name="answer4" value="<?php echo $rows['Answer4']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Correct Answer</label>
                                        <label>Correct Answer</label>
                                        <select name="correct_answer" style="width: 100%; height: 40px;">
                                            <option value="">-- Select Correct Answer --</option>
                                            <option value="Answer1"<?php if ($rows['CorrectAnswer'] == 'Answer1') { echo ' selected';} ?>>Answer 1</option>
                                            <option value="Answer2"<?php if ($rows['CorrectAnswer'] == 'Answer2') { echo ' selected';} ?>>Answer 2</option>
                                            <option value="Answer3"<?php if ($rows['CorrectAnswer'] == 'Answer3') { echo ' selected';} ?>>Answer 3</option>
                                            <option value="Answer4"<?php if ($rows['CorrectAnswer'] == 'Answer4') { echo ' selected';} ?>>Answer 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="add" class="btn btn-info btn-fill pull-right">Update</button>
                            <a href="manage_questions.php">
                                <button type="button" class="btn btn-info btn-fill pull-right" style="margin-right: 20px;">Back</button>
                            </a>
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
<?php include ("layouts/footer.php"); ?>