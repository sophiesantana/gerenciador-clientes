<?php

  include __DIR__ . '/../clients/db_mysql_connection/index.php';

  class UserAdmRepository extends ConnectDB {
    protected $nome;
    protected $cpf;
    protected $password;

    public function __construct($nome, $cpf, $password)
    {
      $this->nome = $nome;
      $this->password = $password;
      $this->cpf = $cpf;

      $this->create();
    }

    public function create() {
      $query = "INSERT INTO learn.admin_users (username, password, cpf) VALUES (?, ?, ?)";
      $conn = parent::__construct();
      $stmt = $conn->prepare($query);
      
      if ($stmt) {
        $stmt->bind_param("sss", $this->nome, $this->password, $this->cpf);
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