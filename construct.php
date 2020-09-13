<?php
class Login {
    //classes//
    private $login;
    private $senha;
    private $nome;

    // construct(construtor)

    public function __construct($email,$senha,$nome) {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }


    public function getEmail(){
        return $this->email;
    }


    public function setEmail($e){
        $this->email = $e;
    }


    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

     //metodo//

    public function Logar(){
        if($this->email== "teste@teste.com" and $this->senha =="123456"):
            echo " Logado com sucesso";
        else:      
            echo " dados invalidos!";
        endif;

    }
}  
// set 
$logar = new Login("teste@tste.com", "1234456","rodrigo" ); // os parametros do construct
$logar->Logar();
echo "<br>";
// get
echo $logar->getEmail(); // ir'a mostrar o email no navegaddor


?>