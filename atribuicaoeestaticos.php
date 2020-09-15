<?php
class Login {
    public static $user;

    public static function verificaLogin() {
        echo " o usario ".self::$user. " esta logado!";
    }
}
/* com o metodo estatic nao precisamos mais estanciar
a class, basta fazer como ta abaixo que e declarando
o nome da class com :: e chamar o metodo.
atronuindo o valor no atributo, basta fazer a mesma coisa
Login::$user="qualquercoisa";
para exibir o nome, basta ir no metodo e colocar no
echo"o usuario".self::nome do atributo."esta logado".
o $this, nao funciona com membros staticos.
usamos o self::
*/
 
Login::$user ="admin";
Login::verificaLogin();
