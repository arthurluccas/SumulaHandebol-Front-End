<?php

class Usuario {
    public $nome;
    public $cpf;
    public $rg;
    public $telefone;
    public $email;

    public function trocaLivro(){
        echo"Codigo do Livro";
    }

    public function mostraUsuario(){
        echo $this->nome. "<br>"; //this faz referencia a classe

    }


    
}