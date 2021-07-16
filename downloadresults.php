<?php
    session_start();
    include "sessions.php";
    include "connection.php";

    $userId = $_SESSION['userid'];
    $resultId = $_GET['id'];
    $q = "SELECT quiz.Topic, quiz.Age, results.* FROM results INNER JOIN quiz ON results.QuizId = quiz.ID WHERE results.ID = " . $resultId . ";";
    $query = mysqli_query ($conn, $q);
    $result = mysqli_fetch_assoc($query);

    if (count($result) <= 0) {
        echo "<script>alert('Unable to download quiz results!');";
        die("window.history.go(-1);</script>");
    }

    $sql = "SELECT questions.*, user_answers.Answer FROM user_answers INNER JOIN questions ON user_answers.QuestionId = questions.ID WHERE ResultId = " . $resultId . ";";
    $query = mysqli_query ($conn, $sql);

    $title = array();
    $title[0] = 'Quiz: ' . $result['Topic'] . ' (' . $result['Age'] . ')';
    $datetime = array();
    $datetime[0] = 'Completed At: ' . date_format(date_create($result['CompletedAt']),"D d, M Y h:i A") . ' (' . $result['Age'] . ')';
    $stats = array();
    $stats[0] = 'Results: ' . $result['TotalCorrect'] . ' / ' . $result['TotalAnswered'] . '';
    $header = array();
    $header[0] = 'Questions';
    $header[1] = 'Your Answer';
    $header[2] = 'Correct Answer';
    $header[3] = 'Status';

    $list = array();
    $counter = 0;
    array_push($list, $title);
    array_push($list, $stats);
    array_push($list, array(' '));
    array_push($list, $header);
    while($rows = mysqli_fetch_array($query)){
        $counter++;
        if ($rows['Answer'] != $rows['CorrectAnswer']) {
            $status = "Incorrect";
        } else {
            $status = "Correct";
        }
        $line = array();
        $line[0] = $counter . '. ' . $rows['Question'];
        $line[1] = $rows[$rows['Answer']];
        $line[2] = $rows[$rows['CorrectAnswer']];
        $line[3] = $status;
        // $line = '' . $counter . '. ' . $rows['Question'] . ', ' . $rows[$rows['Answer']] . ', ' . $rows[$rows['CorrectAnswer']] . ', ' . $status . '';
        array_push($list, $line);
    }

    $filename = "results_" . $resultId . ".csv";

    array_to_csv_download($list, $filename, ',');

    function array_to_csv_download($array, $filename = "results.csv", $delimiter=";") {
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="'.$filename.'";');

        $f = fopen('php://output', 'w');
        foreach ($array as $line) {
            fputcsv($f, $line, $delimiter);
        }
        fclose($f);
    }
?>