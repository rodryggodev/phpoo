<?php

/** Namespaces 
 *  quando criar um arquivo em outra pasta
 * 1 - colocar o namespace nomequalquer, no arquivo na pasta
 * a qual vc deseja. nessa caso de estudo to usando as pastas
 * classes e models como exemplo.
 * require'classes/produto.php';
*  require'models/produto.php
 * 
 * 2- colocar o require='nomedapasta/nomedo arquivo.php';
 * 
 * 3- para chamar o arquivo qualqueremos de outro diretorio(pasta)
 * basta fazer assim: $produto =new \classes\Produto()
 * 
 * 4- ou podemos fazer assim: use pasta\nomedaclasse.
 * 
 * 5- ou podemos criar um apelidio e chamar pelo apelideo
 * use nomedapasta\nomedaclasse as nomequalquer
 * ex: use models\Produto as produtomodelo.
*/

require'classes/produto.php';
require'models/produto.php';

use models\Produto;

$produto = new\classes\Produto();
$produto->mostrarDetalhes();

