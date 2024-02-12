<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: *");
  header("Access-Control-Allow-Headers: *");

  include './src/clients/db_mysql_connection/index.php';

  if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
      header("HTTP/1.1 200 OK");
      exit();
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = json_decode(file_get_contents("php://input"), true);
      echo json_encode($data);
  } else {
      header("HTTP/1.1 405 Method Not Allowed");
      echo "Method Not Allowed";
  }
?>