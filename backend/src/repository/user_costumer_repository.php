<?php

  include __DIR__ . '/../clients/db_mysql_connection/index.php';

  class UserCostumerRepository extends ConnectDB {
    protected $costumer_id;

    public function create($nome, $cpf, $data_nasc, $rg, $telefone, $endereco1, $endereco2) {
      $query_costumer = "INSERT INTO learn.customers (nome, data_nasc, cpf, rg, telefone) VALUES (?, ?, ?, ?, ?)";
      $query_address = "INSERT INTO learn.customer_addresses (customer_id, rua, cidade, estado, cep) VALUES (?, ?, ?, ?, ?)";
      $conn = parent::__construct();
      $stmt_costumer = $conn->prepare($query_costumer);
      $stmt_address = $conn->prepare($query_address);
      
      if ($stmt_costumer) {
        $stmt_costumer->bind_param("sssss", $nome, $data_nasc, $cpf, $rg, $telefone);
        if ($stmt_costumer->execute()) {
          $this->costumer_id = $stmt_costumer->insert_id;
          echo "Costumer inserted successfully!";
        } else {
            echo "Error executing statement: " . $stmt_costumer->error;
        }
        $stmt_costumer->close();
      } else {
          echo "Error preparing statement: " . $conn->error;
      }

      if ($stmt_address) {
        $stmt_address->bind_param("issss", $this->costumer_id, $endereco1['rua'], $endereco1['cidade'], $endereco1['estado'], $endereco1['cep']);
        if ($stmt_address->execute()) {
            echo "Address 1 inserted successfully!";
        } else {
            echo "Error executing statement: " . $stmt_address->error;
        }
        
        if ($endereco2['rua'] || $endereco2['cidade'] || $$endereco2['estado'] || $endereco2['cep']) {
          $stmt_address->bind_param("issss", $this->costumer_id, $endereco2['rua'], $endereco2['cidade'], $endereco2['estado'], $endereco2['cep']);
          if ($stmt_address->execute()) {
            echo "Address 2 inserted successfully!";
          } else {
              echo "Error executing statement: " . $stmt_address->error;
          }
        }
        $stmt_address->close();
      }  else {
        echo "Error preparing statement: " . $conn->error;
      }

      $conn->close();
    }

    public function list() {
      $query = "SELECT * FROM learn.customers AS `c` INNER JOIN learn.customer_addresses AS `a` ON `c`.id = `a`.customer_id";
      $conn = parent::__construct();

      $stmt = $conn->prepare($query);

      if ($stmt) {
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result) {
            if ($result->num_rows > 0) {
                $data = $result->fetch_all(MYSQLI_ASSOC);
                echo json_encode($data);
            } else {
                echo "No rows found.";
            }

            $result->close();
        } else {
            echo "Error fetching result: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
    }
  }
?>