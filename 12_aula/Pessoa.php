<?php
    class Pessoa{
        public $nome;
        public $idade;
        public $cidade;

        // CONSTRUTOR
        public function __construct($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function apresentar(){
            echo "<p>Olá, meu nome é ".$this->nome." tenho "
            .$this->idade." anos e moro em ".$this->cidade.".</p>";
        }
    }
?>