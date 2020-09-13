<?php
    class Login {
        //classes//
        private $login;
        private $senha;

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
    $logar = new Login();
    $logar->setEmail("teste@teste.com");
    $logar->setSenha("123456");
    $logar->Logar();
    echo "<br>";
    // get
    echo $logar->getEmail(); // ir'a mostrar o email no navegaddor
    

?>