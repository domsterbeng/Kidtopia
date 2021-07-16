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
            <a class="navbar-brand" href="#">Create Questions</a>
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
                <li>
                    <a href="../logout.php">(Logout)</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create Questions</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="uploadquestion.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Quiz</label>
                                        <br>
                                        <select name="quiz" style="width: 100%; height: 40px;">
                                            <option value="">-- Select a Quiz --</option>
                                            <?php
                                                $q = "SELECT * FROM quiz";
                                                $query = mysqli_query ($conn, $q);

                                                $counter = 0;
                                                while($rows = mysqli_fetch_array($query)){
                                                $counter++;
                                            ?>
                                                <option value="<?=$rows['ID']?>"><?=$rows['Topic']?> (Age: <?=$rows['Age']?>)</option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Question</label>
                                        <input type="text" class="form-control" name="question">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 1</label>
                                        <input type="text" class="form-control" name="answer1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 2</label>
                                        <input type="text" class="form-control" name="answer2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 3</label>
                                        <input type="text" class="form-control" name="answer3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 4</label>
                                        <input type="text" class="form-control" name="answer4">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Correct Answer</label>
                                        <select name="correct_answer" style="width: 100%; height: 40px;">
                                            <option value="">-- Select Correct Answer --</option>
                                            <option value="Answer1">Answer 1</option>
                                            <option value="Answer2">Answer 2</option>
                                            <option value="Answer3">Answer 3</option>
                                            <option value="Answer4">Answer 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="add" class="btn btn-info btn-fill pull-right">Add</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ("layouts/footer.php"); ?>