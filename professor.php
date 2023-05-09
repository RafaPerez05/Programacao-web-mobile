<?php

class Cliente{
    //atributos
    private $nome;
    private $cpf;
    private $mestrado;
    private $idade;
    private $email;
    private $telefone;
    //Contrutores
    function __construct($nome, $cpf, $mestrado, $idade, $email, $telefone){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->mestrado = $mestrado;
        $this->idade = $idade;
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

    function set_dataNasc($mestrado){
        $this->mestrado =$mestrado;
    }

    function get_dataNasc(){
        return($this->mestrado);
    }


    function set_endereco($idade){
        $this->idade =$idade;
    }

    function get_enderecor(){
        return($this->idade);
    }

    function set_email($email){
        $this->email =$email;
    }

    function get_email(){
        return($this->email);
    }

    function set_telefone($telefone){
        $this->telefone =$telefone;
    }

    function get_valor(){
        return($this->telefone);
    }

}