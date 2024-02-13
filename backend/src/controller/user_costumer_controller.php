<?php

  include __DIR__ . '/../service/user_costumer_service.php';

  class UserCostumerController {
    protected $nome;
    protected $cpf;
    protected $data_nasc;
    protected $rg;
    protected $telefone;
    protected $endereco1;
    protected $endereco2;

    public function create($data_request) {
      $this->nome = $data_request['nome'];
      $this->cpf = $data_request['cpf'];
      $this->data_nasc = $data_request['dataNasc'];
      $this->rg = $data_request['rg'];
      $this->telefone = $data_request['telefone'];
      $this->endereco1 = $data_request['endereco1'];
      $this->endereco2 = $data_request['endereco2'];

      $user_costumer_service = new UserCostumerService;
      $user_costumer_service->create($this->nome, $this->cpf, $this->data_nasc, $this->rg, $this->telefone, $this->endereco1, $this->endereco2);
    }

    public function list() {
      $user_adm_service = new UserCostumerService;
      $user_adm_service->list();
    }
  }
?>