<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Oficina EL Carron-Car</title>
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
class car {
    public $type;
        public $brand;
            public $species;
                public $category;
                    public $bodywork;
                        public $color;
}

    $LexusLS= new car;
    $LexusLS->type = 'carro</br> luxo';
    $LexusLS->brand = 'Lexus LS';
    $LexusLS->species = 'Misto';
    $LexusLS->category = 'Particular';
    $LexusLS->bodywork = 'Cabine</br> dupla';
    $LexusLS->color = 'Obsidian';
    

    echo "</br></br></br></br>";

    echo    "<p class='tit-ca'>Carro</p></br></br></br></br>
    
    <section class='container'>
    <div class='top-c'>Tipo:</div>
    <div class='top-c'>Marca:</div>
    <div class='top-c'>Espécie:</div>
    <div class='top-c'>Categoria:</div>
    <div class='top-c'>Carroçaria:</div>
    <div class='top-c'>Cor:</div>
    </section>
    
    <section class='container'>
    <div class='tes-c'>$LexusLS->type</div>
    <div class='tes-c'>$LexusLS->brand</div>
    <div class='tes-c'>$LexusLS->species</div>
    <div class='tes-c'>$LexusLS->category</div>
    <div class='tes-c'>$LexusLS->bodywork</div>
    <div class='tes-c'>$LexusLS->color</div>
    </section>";
echo "</br></br></br></br>"
?>

</body>
</html>