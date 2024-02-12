<?php
  $server_name = 'localhost';
  $user_name = 'sophie';
  $password = 'Senha123@';
  $db_name = 'learn';

  $conn = mysqli_connect($server_name, $user_name, $password, $db_name);

  if (!$conn) {
    die('Connection failed ' . mysqli_connect_error());
  }

  echo 'Connected to database mysql sophie/learn';
  echo "\n";
?>