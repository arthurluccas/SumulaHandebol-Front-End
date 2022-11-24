<?php

require_once "Usuario.php"; //criar objeto

$usuario1 = new Usuario();
$usuario1 = new Usuario();

$usuario1-> nome = "Arthur";
$usuario1-> email = "arthurreideleas@gostoso.com";
$usuario1-> telefone = "11 45255852";

$usuario2-> nome = "Esther";
$usuario1-> email = "seila@gmail.com";
$usuario1-> telefone = "11 45255852";


echo $usuario1->nome;

echo $usuario2->nome;

$usuario1->mostraUsuario();