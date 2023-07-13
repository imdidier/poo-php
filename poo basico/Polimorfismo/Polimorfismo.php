<?php

//Polimorfismo Distintas formas de instanciar un objeto

class Transporte{

        public $name;
        public $tipo;
        public $num;

}

$carro = new Transporte;
$avion = new Transporte;