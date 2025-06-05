<?php
require_once "Carro.php";
require_once "Pessoa.php";

$meuCarro = new Carro("Chevrolet","Onix",2020,"branco");

$outroCarro = new Carro("Fiat","Argo",2022,"Vermelho");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instanciando Objetos</title>
    <style>
        h1{font-size: 1.3rem; text-align:center;}
        h2{font-size: 1rem; text-align:center;}
        p{
            font-family:'Verdana', sans-serif;
        }
    </style>
</head>
<body>
    <h1>Instanciando Objetos</h1>
    <p> Eu possuo um <?=$meuCarro->marca?> 
    <?=$meuCarro->modelo?></p>

    <p>Ligando meu carro
    <?php
        $meuCarro->ligar();
        echo "<br>";
        $meuCarro->desligar();
    ?></p>
    
     <!-- OUTRO CARRO -->

    <p>Outro carro: <?=$outroCarro->marca?>
        <?=$outroCarro->modelo?></p>

    <p> Ligando o <?=$outroCarro->marca?> 
    <?=$outroCarro->modelo?></p> 

    <p><?=$outroCarro->ligar() ?></p>
    <p><?=$outroCarro->desligar() ?>

<h2> Exercício com a Classe Pessoa</h2>
<?php
$pessoa1 = new Pessoa("Maria",17);
$pessoa2 = new Pessoa("João",15);

$pessoa1->cidade = "Aguaí";
$pessoa2->cidade = "São João da Boa Vista";

$pessoa1->apresentar();
$pessoa2->apresentar();
?>   

</body>
</html>


