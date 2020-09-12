<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <?php
       echo " <h1> Bem vindo</h1>";
        // class
        class Pessoa {
            public $nome;
            public $idade;

            public function Falar(){
                echo $this->nome. " de ".$this->idade. " acabou de falar";
            }
        }

        $rodrigo = new Pessoa();
        $rodrigo->nome = " rodrigo";
        $rodrigo->idade= 27;
        $rodrigo->Falar();

    ?>
</body>
</html>