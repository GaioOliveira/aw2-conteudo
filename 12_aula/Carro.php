<?php
    class Carro{
        // Atributos (propriedades)
        public $marca;
        public $modelo;
        public $ano;
        public $cor;

        // Construtor da classe
        public function __construct($marca, $modelo, $ano, $cor) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->cor = $cor;
            }
        
        
        // Métodos (comportamentos)
        public function ligar(){
            echo "Vruuuum...\n";
        }

        public function desligar(){
            echo "Carro desligado.\n";
        }
    }