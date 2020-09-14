<?php
/**
 * modificadores de acessos
 * public- fara com que nao haja ocultacao nenhuma, toda
 * propriedade ou metodo declarado com publix serao
 * acessivei por todos que quiserem acessalos
 * 
 * protected- visibilidade protected faz com que todos
 * os herdeiros vejam as propriedades ou metodos
 * protegidos como se fossem publicos
 * 
 * privave- ao contrario do public, esse modificador faz
 * com que qualquer metodo ou propriedade seja visivel
 * so e somente pela classe que a declarou
 */


 class Veiculo {
     protected $modelo;
     public $cor;
     public $ano;

     public function Andar(){
         echo "Andou!";
     }
     public function Parar(){
         echo "Parou!!";
     }
     // para acessar a protected no escoco da class
     public function setModelo($m){
         $this->modelo=$m;

     }
     public function getModelo(){
         return $this->modelo;
     }

    }

    class Carro extends Veiculo{

        public function Parabrisa(){
            echo "limpar 321";
        }

    }

    class Moto extends Veiculo {
        public function darGrau(){
            echo "Deu grau!!";
        }
    }

    $veiculo = new Veiculo();
    $veiculo->setModelo=("Hilux"); // protected com get e set
    echo $veiculo->getModelo();