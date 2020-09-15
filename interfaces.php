<?php 
/** Interfaces
 *  serve para definir um modelo usado por outras classes
 *  ao inves de class algumacoisa, usamos o interface algumacoisa
 * public function create($variavelqualquer); podemos passar parametros
 * caso seja nescessario
 *  */

 interface Crud {
     // aqui nao tem logiga.
    public function create($variavel);

    public function read();

    public function update();

    public function delete();
 }

 class Noticias implements Crud {    
    
    public function create ($variavel) {
        // aqui e criado a logica.
     }
    
    public function read () {
        // aqui e criado a logica.
    } 

    public function update () {
        // aqui e criado a logica.
    }

    public function delete () {
        // aqui e criado a logica.
    }

}