<?php
abstract class Banco {
    public $saldo;
    public $limite;
    public $juros;

    abstract protected function Sacar();
    abstract protected function Depositar();
}

class Itau extends Banco {
    public function Sacar(){
        echo "sacou";
    }
    public function Depositar(){
        echo "depositou";
    }
}


$itau = new Itau();
