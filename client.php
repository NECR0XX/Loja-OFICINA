<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Oficina EL Carron-Client</title>
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
    class client {
        public $name;
            public $dateofbirth;
                public $age;
                    public $gender;
                        public $height;
                            public $weight;
                                public $cpf;
                                    public $income;
                                        public $nationality;
                                            public $city;
    }

    $Jonatas= new client;
    $Jonatas->name = 'Jonatas';
    $Jonatas->dateofbirth = '15/09/1991';
    $Jonatas->age = '32 anos';
    $Jonatas->gender = 'Masculino';
    $Jonatas->height = '1.73 m';
    $Jonatas->weight = '110 kg';
    $Jonatas->cpf = '461698368/22';
    $Jonatas->income = 'R$5780,00';
    $Jonatas->nationality = 'Brasileiro';
    $Jonatas->city = 'Paraguaçu Paulista';


    echo "</br></br></br></br>";
    echo    "<p class='tit-c'>Cliente</p></br></br></br></br>

<section class='container-c'>
<div class='top2 '>Jonatas:</div>
</section>

<section class='container-c'>
<div class='espaço'>Nome:</div>
<div class='tes'>$Jonatas->name</div>
</section>

<section class='container-c'>
<div class='espaço'>Data de Aniversário:</div>
<div class='tes'>$Jonatas->dateofbirth</div>
</section>

<section class='container-c'>
<div class='espaço'>Idade:</div>
<div class='tes'>$Jonatas->age</div>
</section>

<section class='container-c'>
<div class='espaço'>Gênero</div>
<div class='tes'>$Jonatas->gender</div>
</section>

<section class='container-c'>
<div class='espaço'>Peso:</div>
<div class='tes'>$Jonatas->height</div>
</section>

<section class='container-c'>
<div class='espaço'>Altura:</div>
<div class='tes'>$Jonatas->weight</div>
</section>

<section class='container-c'>
<div class='espaço'>CPF:</div>
<div class='tes'>$Jonatas->cpf</div>
</section>

<section class='container-c'>
<div class='espaço'>Renda:</div>
<div class='tes'>$Jonatas->income</div>
</section>

<section class='container-c'>
<div class='espaço'>Nacionalidade:</div>
<div class='tes'>$Jonatas->nationality</div>
</section>

<section class='container-c'>
<div class='espaço'>Cidade:</div>
<div class='tes'>$Jonatas->city</div>
</section>";

?>


</body>
</html>