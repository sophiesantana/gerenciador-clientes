<?php

  include __DIR__ . '/../repository/user_adm_repository.php';

  class UserAdmService {
    protected $nome;
    protected $cpf;
    protected $password;

    public function __construct($nome, $cpf, $password)
    {
      $this->nome = $nome;
      $this->cpf = $cpf;
      $this->password = password_hash($password, PASSWORD_BCRYPT);

      new UserAdmRepository($this->nome, $this->cpf, $this->password);
    }
  }
?>