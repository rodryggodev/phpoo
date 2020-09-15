<?php 
/** Referencia e clonagem de objetos
 * 
 */

 class Pessoa {
     public $idade;
//metodo magico
     public function __clone () {
        echo "clonagem de objetos!";
     }
 }

 $pessoa = new Pessoa();
 $pessoa->idade = 27;

 $pessoa2 = clone $pessoa;
 $pessoa2->idade = 40;

 echo $pessoa->idade;