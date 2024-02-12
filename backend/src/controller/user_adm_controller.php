<?php

  include __DIR__ . '/../service/user_adm_service.php';

  class UserAdmController {
    protected $nome;
    protected $cpf;
    protected $password;

    public function __construct()
    {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = json_decode(file_get_contents("php://input"), true);

        $this->nome = $data['nome'];
        $this->cpf = $data['cpf'];
        $this->password = $data['password'];

        new UserAdmService($this->nome, $this->cpf, $this->password);
      } else {
          header("HTTP/1.1 405 Method Not Allowed");
          echo "Method Not Allowed";
      }
    }
  }
?>