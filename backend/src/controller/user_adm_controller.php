<?php

  include __DIR__ . '/../service/user_adm_service.php';

  class UserAdmController {
    protected $nome;
    protected $cpf;
    protected $password;

    public function create($data_request) {
      $this->nome = $data_request['nome'];
      $this->cpf = $data_request['cpf'];
      $this->password = $data_request['password'];

      $user_adm_service = new UserAdmService;
      $user_adm_service->create($this->nome, $this->cpf, $this->password);
    }

    public function login($data_request) {
      $this->cpf = $data_request['cpf'];
      $this->password = $data_request['password'];

      $user_adm_service = new UserAdmService;
      $user_adm_service->login($this->cpf, $this->password);
    }
  }
?>