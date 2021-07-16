<?php
  include "../connection.php";

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $question = mysqli_real_escape_string($conn, $_POST['question']);
  $answer1 = mysqli_real_escape_string($conn, $_POST['answer1']);
  $answer2 = mysqli_real_escape_string($conn, $_POST['answer2']);
  $answer3 = mysqli_real_escape_string($conn, $_POST['answer3']);
  $answer4 = mysqli_real_escape_string($conn, $_POST['answer4']);
  $correct_answer = mysqli_real_escape_string($conn, $_POST['correct_answer']);

  $sql = "UPDATE questions SET Question = '$question', Answer1 = '$answer1', Answer2 = '$answer2', Answer3 = '$answer3', Answer4 = '$answer4', CorrectAnswer = '$correct_answer' WHERE ID = $id";

  mysqli_query($conn, $sql);

  if (mysqli_affected_rows($conn) <= 0) {
    echo "<script>alert('No data updated!');</script>";
  } else {
    echo "<script>alert('Successfully updated!');</script>";
  }
  echo "<script>window.location.href='manage_questions.php';</script>";




 ?>
