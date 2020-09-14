<?php
class Pessoa {
    const nome = "Rodrigo";
    public function Exibir() {
        echo self::nome;
    }
}

class Rodriggo extends Pessoa {
    const nome = "Martins";
    public function Exibir(){
        echo parent::nome;
    }
}

$rodrigo = new Rodriggo();
$rodrigo->Exibir();