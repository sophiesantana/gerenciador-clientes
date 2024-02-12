<?php

  include __DIR__ . '/../repository/user_adm_repository.php';

  class UserAdmService {
    protected $nome;
    protected $cpf;
    protected $password;

    public function create($nome, $cpf, $password) {
      $this->nome = $nome;
      $this->cpf = $cpf;
      $this->password = password_hash($password, PASSWORD_BCRYPT);

      $user_adm_repository = new UserAdmRepository();
      $user_adm_repository->create($this->nome, $this->cpf, $this->password);
    }

    public function login($cpf, $password) {
      $this->cpf = $cpf;
      $this->password = $password;

      $user_adm_repository = new UserAdmRepository();
      $user_adm_repository->login($this->cpf, $this->password);
    }
  }
?>