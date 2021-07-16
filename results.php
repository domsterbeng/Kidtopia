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

    <body>
        <div class="grid">
            <div id="quiz">
                <h1>Your Results</h1>
                <hr style="margin-top: 20px">

                <div id="results">
                    <?php
                        $resultId = $_GET['id'];
                        $q = "SELECT * FROM results WHERE ID = " . $resultId . ";";
                        $query = mysqli_query ($conn, $q);
                        $result = mysqli_fetch_assoc($query);

                        $q = "SELECT questions.*, user_answers.Answer FROM user_answers INNER JOIN questions ON user_answers.QuestionId = questions.ID WHERE user_answers.ResultId = " . $resultId . ";";
                        $query = mysqli_query ($conn, $q);

                        $counter = 0;
                        while($rows = mysqli_fetch_array($query)){
                            $counter++;
                    ?>
                        <div class="question" id="question-<?=$rows['ID']?>">
                            <h3 class="question-title">
                                <?=$counter . '. ' . $rows['Question']?>
                            </h3>
                            <p>Your Answer: <?=$rows[$rows['Answer']]?></p>
                            <p>Correct Answer: <?=$rows[$rows['CorrectAnswer']]?></p>
                        </div>
                    <?php
                        } 
                    ?>
                </div>

                <hr style="margin-top: 50px">

                <footer>
                    <p id="progress">Correct Answered <?=$result['TotalCorrect']?> out of <?=$result['TotalAnswered']?></p>
                </footer>
                <div class="selections">
                    <a href="menu.php">
                        <button type="button"  class="close">Close</button>
                    </a>
              </div>
            </div>
        </div>

        <!-- <script src="js/quiz.js"></script>
  <script src="js/question.js"></script> -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script src="js/app.js"></script>

    </body>

    </html>