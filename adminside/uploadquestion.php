<?php
  include "../connection.php";

  // $topic = mysqli_real_escape_string($conn, $_POST['topic']);
  // $age = mysqli_real_escape_string($conn, $_POST['age_range']);
  $quiz = mysqli_real_escape_string($conn, $_POST['quiz']);
  $question = mysqli_real_escape_string($conn, $_POST['question']);
  $answer1 = mysqli_real_escape_string($conn, $_POST['answer1']);
  $answer2 = mysqli_real_escape_string($conn, $_POST['answer2']);
  $answer3 = mysqli_real_escape_string($conn, $_POST['answer3']);
  $answer4 = mysqli_real_escape_string($conn, $_POST['answer4']);
  $correct_answer = mysqli_real_escape_string($conn, $_POST['correct_answer']);

  $sql = "INSERT INTO questions (QuizId, Question, Answer1, Answer2, Answer3, Answer4, CorrectAnswer) VALUES ($quiz, '$question', '$answer1', '$answer2', '$answer3', '$answer4', '$correct_answer');";

  mysqli_query($conn, $sql);

  // if ($topic == "plants") {
  //   $sql = "INSERT INTO plants (Topic, Age, Question, Answer1, Answer2, Answer3, Answer4, Correct_Answer) VALUES ('$topic', '$age', '$question', '$answer1', '$answer2', '$answer3', '$answer4', '$correct_answer');";

  //   if ($correct_answer == $answer1 || $correct_answer == $answer2 || $correct_answer == $answer3 || $correct_answer == $answer4) {
  //     mysqli_query($conn, $sql);
  //   } else {s
  //     echo "<script>alert('The correct answer should be one of the four answers!');</script>";
  //   }

  // } elseif ($topic == "space") {
  //   $sql = "INSERT INTO space (Topic, Age, Question, Answer1, Answer2, Answer3, Answer4, Correct_Answer) VALUES ('$topic', '$age', '$question', '$answer1', '$answer2', '$answer3', '$answer4', '$correct_answer');";

  //   if ($correct_answer == $answer1 || $correct_answer == $answer2 || $correct_answer == $answer3 || $correct_answer == $answer4) {
  //     mysqli_query($conn, $sql);
  //   } else {
  //     echo "<script>alert('The correct answer should be one of the four answers!');</script>";
  //   }

  // } elseif ($topic == "dinosaur") {
  //   $sql = "INSERT INTO dinosaur (Topic, Age, Question, Answer1, Answer2, Answer3, Answer4, Correct_Answer) VALUES ('$topic', '$age', '$question', '$answer1', '$answer2', '$answer3', '$answer4', '$correct_answer');";

  //   if ($correct_answer == $answer1 || $correct_answer == $answer2 || $correct_answer == $answer3 || $correct_answer == $answer4) {
  //     mysqli_query($conn, $sql);
  //   } else {
  //     echo "<script>alert('The correct answer should be one of the four answers!');</script>";
  //   }

  // } elseif ($topic == "weather") {
  //   $sql = "INSERT INTO weather (Topic, Age, Question, Answer1, Answer2, Answer3, Answer4, Correct_Answer) VALUES ('$topic', '$age', '$question', '$answer1', '$answer2', '$answer3', '$answer4', '$correct_answer');";

  //   if ($correct_answer == $answer1 || $correct_answer == $answer2 || $correct_answer == $answer3 || $correct_answer == $answer4) {
  //     mysqli_query($conn, $sql);
  //   } else {
  //     echo "<script>alert('The correct answer should be one of the four answers!');</script>";
  //   }
    
  // }

  if (mysqli_affected_rows($conn) <= 0) {
    echo "<script>alert('Unable to add question!');";
    die("window.history.go(-1);</script>");
  }
  echo "<script>alert('Question added successfully!');";
  die("window.location.href='adminindex.php';</script>");











 ?>
