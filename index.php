<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Oficina EL Carron</title>
</head>
<body id="fundo">
    

    <div id=menu>
        <ul>
            <p>Oficina</br>El Carron</p>
                <li><a class="active" href="index.php">ínicio</a></li>
                    <li><a class="active" href="service.php">Serviços</a></li>
                        <li><a class="active" href="product.php">Produtos</a></li>
                            <li><a class="active" href="client.php">Cliente</a></li>
                                <li><a class="active" href="car.php">Carros</a></li>
                                    <li><img src="Image/B3YR.gif" height="100px">
                                        </ul>
    </div>


<?php

include_once("service.php");
include_once("product.php");
include_once("client.php");
include_once("car.php");

$soma=($amortecedor->price+$cilindro->price+$bateria->price+$freios->price);

echo "
<section class='container-c'>
<div class='espaço'>Cliente:</div>
<div class='tes'>$Jonatas->name</div>
</section>

<section class='container-c'>
<div class='espaço'>Carro:</div>
<div class='tes'>$LexusLS->brand</div>
</section>

<section class='container-c'>
<div class='espaço'>Serviços:</div>
<div class='tes'>-Troca de amortecedor;</br>-Troca de cilindro;</br>-Troca de bateria;</br>-Troca de freios.</div>
</section>

<section class='container-c'>
<div class='espaço'>Produtos:</div>
<div class='tes'>$amortecedor->name;</br> $cilindro->name;</br> $bateria->name;</br> $freios->name</div>
</section>

<section class='container-c'>
<div class='espaço'>Total à Pagar:</div>
<div class='tes'>R$$soma</div>
</section>";


    

?>

</body>
</html>