<?php
    session_start();
    include "session.php";
    include "connection.php";

    $quizId = $_POST['quizId'];
    $userId = $_SESSION['userid'];

    $sql = "INSERT INTO results (UserId, QuizId, TotalAnswered, TotalCorrect) VALUES ($userId, $quizId, 0, 0);";
    
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) <= 0) {
        echo "<script>alert('Unable to submit quiz!');";
        die("window.history.go(-1);</script>");
    }

    $resultId = $conn->insert_id;

    $totalAnswered = 0;
    $totalCorrect = 0;
    $totalWrong = 0;
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'Question') !== false) {
            $totalAnswered ++;
            $questionId = str_replace('Question', '', $key);
            $q = "SELECT CorrectAnswer FROM questions WHERE ID = " . $questionId . ";";
            $query = mysqli_query($conn, $q);

            $question = mysqli_fetch_assoc($query);

            var_dump($question);
            echo $question['CorrectAnswer'];
            echo $value;
            if ($question['CorrectAnswer'] == $value) {
                $totalCorrect ++;
            } else {
                $totalWrong ++;
            }

            $sql = "INSERT INTO user_answers (UserId, QuestionId, ResultId, Answer) VALUES ($userId, $questionId, $resultId, '$value');";

            mysqli_query($conn, $sql);

            if (mysqli_affected_rows($conn) <= 0) {
                echo "<script>alert('Unable to submit quiz!');";
                die("window.history.go(-1);</script>");
            }
        }
        // echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
    }

    $sql = "UPDATE results SET TotalAnswered = $totalAnswered, TotalCorrect = $totalCorrect WHERE ID = $resultId";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) <= 0) {
        echo "<script>alert('Unable to submit quiz!');";
        die("window.history.go(-1);</script>");
    }

    die("<script>window.location.href = 'results.php?id=$resultId';</script>");
?>