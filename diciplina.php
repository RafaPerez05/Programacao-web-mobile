<?php

class Produto{
    //atributos
    private $nome;
    private $abreviacao;
    private $qtd_alunos;
    private $professor;


    //Contrutores
    function __construct($nome, $abreviacao, $qtd_alunos){
        $this->nome = $nome;
        $this->abreviacao = $abreviacao;
        $this->qtd_alunos = $qtd_alunos;
        $this->professor = $professor;
    }


    //getters and setters
    function set_nome($nome){
        $this->nome =$nome;
    }

    function get_nome(){
        return($this->nome);
    }


    function set_abreviacao($abreviacao){
        $this->abreviacao =$abreviacao;
    }

    function get_abreviacao(){
        return($this->abreviacao);
    }


    function set_qtd_alunos($qtd_alunos){
        $this->qtd_alunos =$qtd_alunos;
    }

    function get_qtd_alunos(){
        return($this->qtd_alunos);
    }

    function set_professor($professor){
        $this->professor =$professor;
    }

    function get_professor(){
        return($this->professor);
    }

}
?>