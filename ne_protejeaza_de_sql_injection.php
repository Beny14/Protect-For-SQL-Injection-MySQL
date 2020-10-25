<?php
// Introducem valorile din campul input dintr-un <form> in baza de date create
  // mysqli_real_escape_string() ne protejeaza de atacul "SQL Injection"
  $firstName = mysqli_real_escape_string($connect, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($connect, $_POST['lastName']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $forumUsername = mysqli_real_escape_string($connect, $_POST['forumUsername']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);
  $repeatPassword = mysqli_real_escape_string($connect, $_POST['repeatPassword']);
?>
