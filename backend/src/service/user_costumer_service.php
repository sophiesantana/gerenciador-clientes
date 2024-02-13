<?php

  include __DIR__ . '/../repository/user_costumer_repository.php';

  class UserCostumerService {
    protected $nome;
    protected $cpf;
    protected $data_nasc;
    protected $rg;
    protected $telefone;
    protected $endereco1;
    protected $endereco2;

    public function create($nome, $cpf, $data_nasc, $rg, $telefone, $endereco1, $endereco2) {
      $this->nome = $nome;
      $this->cpf = $cpf;
      $this->data_nasc = $data_nasc;
      $this->rg = $rg;
      $this->telefone = $telefone;
      $this->endereco1 = $endereco1;
      $this->endereco2 = $endereco2;

      $user_costumer_repository = new UserCostumerRepository();
      $user_costumer_repository->create($this->nome, $this->cpf, $this->data_nasc, $this->rg, $this->telefone, $this->endereco1, $this->endereco2);
    }

    public function list() {
      $user_costumer_repository = new UserCostumerRepository();
      $user_costumer_repository->list();
    }
  }
?>