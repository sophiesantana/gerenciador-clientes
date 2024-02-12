<?php

  include __DIR__ . '/../clients/db_mysql_connection/index.php';

  class UserAdmRepository extends ConnectDB {
    public function create($nome, $cpf, $password) {
      $query = "INSERT INTO learn.admin_users (username, cpf, password) VALUES (?, ?, ?)";
      $conn = parent::__construct();
      $stmt = $conn->prepare($query);
      
      if ($stmt) {
        $stmt->bind_param("sss", $nome, $cpf, $password);
        if ($stmt->execute()) {
            echo "User inserted successfully!";
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
    }
  }
?>