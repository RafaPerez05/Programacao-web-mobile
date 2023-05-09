<?php

class Cliente{
    //atributos
    private $nome;
    private $cpf;
    private $dataNasc;
    private $endereco;
    private $email;
    private $telefone;
    //Contrutores
    function __construct($nome, $cpf, $dataNasc, $endereco, $email, $telefone){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNasc = $dataNasc;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }


    //getters and setters
    function set_nome($nome){
        $this->nome =$nome;
    }

    function get_nome(){
        return($this->nome);
    }


    function set_cpf($cpf){
        $this->cpf =$cpf;
    }

    function get_cpf(){
        return($this->cpf);
    }

//CONTINUARRRRRRRRR
    function set_descricao($descricao){
        $this->descricao =$descricao;
    }

    function get_descicao(){
        return($this->descricao);
    }


    function set_valor($valor){
        $this->valor =$valor;
    }

    function get_valor(){
        return($this->valor);
    }

}