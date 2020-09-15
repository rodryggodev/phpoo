<?php 
/** Polimorfismo
 * polimorfismo e reescrever um meto herdado
 */

 class Animal {
     public function Andar(){
         echo "O animal andou";
     }
 }

 class Cavalo extends Animal {
    public function Andar(){
        echo "O animal rinchou";
    }
 }

 $animal = new Cavalo();
 $animal->Andar();