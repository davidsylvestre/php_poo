<?php

class Cliente
{
    /** @var  string */
    public $nome;
    /** @var  string */
    public $cpf;
    /** @var  string */
    public $endereco;
    /** @var  \DateTime */
    public $dataNascimento;

    /** @var  int Identificador unico do registro */
    public $id;

    /**
     * @param string $nome
     * @param string $cpf
     * @param string $endereco
     * @param \DateTime $dataNascimento
     */
    public function __construct($id, $nome, $cpf, $endereco, $dataNascimento)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->dataNascimento = $dataNascimento;
    }
}