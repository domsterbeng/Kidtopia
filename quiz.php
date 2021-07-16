<?php
    session_start();
    include "sessions.php";
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quiz</title>
  <link rel="stylesheet" href="css/slick.css" type="text/css" />
  <link rel="stylesheet" href="css/slick-theme.css" type="text/css" />
  <link rel="stylesheet" href="css/quiz.css" type="text/css">
</head>
<body background="images/background.gif">
<div class="grid">
    <div id="quiz">
      <h1>QUIZ</h1>
      <hr style="margin-top: 20px">

      <form action="submitquiz.php" method="POST">
        <div id="questions">
          <?php
            $quizId = $_GET['id'];
            $q = "SELECT * FROM questions WHERE QuizId = " . $quizId . ";";
            $query = mysqli_query ($conn, $q);

            $counter = 0;
            while($rows = mysqli_fetch_array($query)){
              $counter++;
          ?>
            <div class="question" id="question-<?=$rows['ID']?>" data-answer="">
              <h3 class="question-title"><?=$counter . '. ' . $rows['Question']?></h3>

              <div class="selections">
                <button type="button" class="selection-card" data-selection="Answer1">
                  <span><?=$rows['Answer1']?></span>
                </button>
                <button type="button" class="selection-card" data-selection="Answer2">
                  <span><?=$rows['Answer2']?></span>
                </button>
                <button type="button" class="selection-card" data-selection="Answer3">
                  <span><?=$rows['Answer3']?></span>
                </button>
                <button type="button" class="selection-card" data-selection="Answer4">
                  <span><?=$rows['Answer4']?></span>
                </button>
              </div>
              
              <input type="hidden" class="question-input" name="Question<?=$rows['ID']?>" value="">
            </div>
          <?php
            }
          ?>
        </div>
        <input type="hidden" name="quizId" value="<?=$quizId?>">
        <button type="submit" class="hidden" id="submit-answer">Submit Answer</button>
      </form>

      <hr style="margin-top: 50px">

      <footer>
        <p id="progress">Question <span id="current-question-no">1</span> of <span id="total-questions-no"><?=$counter?></span></p>
      </footer>
    </div>
  </div>
  
  <!-- <script src="js/quiz.js"></script>
  <script src="js/question.js"></script> -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script src="js/app.js"></script>

</body>
</html>