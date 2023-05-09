<?php

require "produto.php";
require "cliente.php";
require "professor.php";
require "diciplina.php";


//Produto 
$produto1 = new Produto ("celular", "iphone", "rosa",100);

//Cliente
$cliente1 = new Cliente ("Ronaldo", 52125893800, "23/5/99","RJ","ronaldoPJL@eu.com","981617763");

//Professor
$professor1 = new Professor ("Jorge", 52125893800, "Nao",27,"jorgeMatatorDeOnca@sobreisso.com","981617763",1564389910);

//Diciplina
$professor1 = new Professor ("banco de dados", "BD",83,"Jorge");


?>