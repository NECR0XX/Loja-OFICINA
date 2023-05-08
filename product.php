<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Oficina EL Carron-Product</title>
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

class product {
    public $name;
        public $price;
            public $material;
                public $replacement;
                    public $deadlineforassembly;
                        public $form;
                            public $width;
                                public $height;
                                    public $weight;
                                        public $guarantee;
}

    $alternador= new product;
    $alternador->name = 'Alternador';
    $alternador->price = '478';
    $alternador->material = 'Metal';
    $alternador->replacement = '20 mil</br> quilômetros';
    $alternador->deadlineforassembly = '1</br> dia';
    $alternador->form = 'Alternador</br> 70a';
    $alternador->widht = '29cm';
    $alternador->height = '20cm';
    $alternador->weight = '16.5 Kg';
    $alternador->guarantee = '6 meses';


$amortecedor= new product;
    $amortecedor->name = 'Amortecedor';
    $amortecedor->price = '417';
    $amortecedor->material = 'Metal';
    $amortecedor->replacement = '10 mil</br> quilômetros';
    $amortecedor->deadlineforassembly = '1</br> dia';
    $amortecedor->form = 'Amortecedor</br> velth';
    $amortecedor->widht = '12cm';
    $amortecedor->height = '25cm';
    $amortecedor->weight = '1 Kg';
    $amortecedor->guarantee = '6 meses';


$bateria= new product;
    $bateria->name = 'bateria';
    $bateria->price = '415';
    $bateria->material = 'Metal';
    $bateria->replacement = '10</br> anos';
    $bateria->deadlineforassembly = '1</br> dia';
    $bateria->form = 'bateria';
    $bateria->widht = '20cm';
    $bateria->height = '29cm';
    $bateria->weight = '16.5 Kg';
    $bateria->guarantee = '1 mês';

$correia= new product;
    $correia->name = 'correia';
    $correia->price = '130';
    $correia->material = 'Metal';
    $correia->replacement = '20</br> anos';
    $correia->deadlineforassembly = '1</br> dia';
    $correia->form = 'correia';
    $correia->widht = '20cm';
    $correia->height = '29cm';
    $correia->weight = '16.5 Kg';
    $correia->guarantee = '1 mês';

$cilindro= new product;
    $cilindro->name = 'Cilindro';
    $cilindro->price = '230';
    $cilindro->material = 'Metal';
    $cilindro->replacement = '10</br> anos';
    $cilindro->deadlineforassembly = '1</br> dia';
    $cilindro->form = 'Cilindro';
    $cilindro->widht = '20cm';
    $cilindro->height = '29cm';
    $cilindro->weight = '16.5 Kg';
    $cilindro->guarantee = '1 mês';

$freios= new product;
    $freios->name = 'freios';
    $freios->price = '240';
    $freios->material = 'Metal';
    $freios->replacement = '10</br> anos';
    $freios->deadlineforassembly = '1</br> dia';
    $freios->form = 'freios';
    $freios->widht = '20cm';
    $freios->height = '29cm';
    $freios->weight = '16.5 Kg';
    $freios->guarantee = '1 mês';

$bobina= new product;
    $bobina->name = 'bobina';
    $bobina->price = '210';
    $bobina->material = 'Metal';
    $bobina->replacement = '10</br> anos';
    $bobina->deadlineforassembly = '1</br> dia';
    $bobina->form = 'bobina';
    $bobina->widht = '20cm';
    $bobina->height = '29cm';
    $bobina->weight = '16.5 Kg';
    $bobina->guarantee = '1 mês';




    echo "</br></br></br></br>";
    echo    "<p class='tit'>Produtos</p></br></br></br></br>
$
<section class='container-2'>
<div class='top1-p'>Características</div>
<div class='top'>Alternador:</div>
<div class='top'>Amortecedor:</div>
<div class='top'>Bateria:</div>
<div class='top'>Correia:</div>
<div class='top'>Cilindro:</div>
<div class='top'>Freio:</div>
<div class='top'>Bobina:</div>
</section>

<section class='container-2'>
<div class='espaço-p'>Nome:</div>
<div class='tes-p1'>$alternador->name</div>
<div class='tes-p'>$amortecedor->name</div>
<div class='tes-p'>$bateria->name</div>
<div class='tes-p'>$correia->name</div>
<div class='tes-p'>$cilindro->name</div>
<div class='tes-p'>$freios->name</div>
<div class='tes-p'>$bobina->name</div>
</section>

<section class='container-2'>
<div class='espaço-p'>Preço</div>
<div class='tes-p2'>$alternador->price</div>
<div class='tes-p'>$amortecedor->price</div>
<div class='tes-p'>$bateria->price</div>
<div class='tes-p'>$correia->price</div>
<div class='tes-p'>$cilindro->price</div>
<div class='tes-p'>$freios->price</div>
<div class='tes-p'>$bobina->price</div>
</section>

<section class='container-2'>
<div class='espaço-p'>Material:</div>
<div class='tes-p3'>$alternador->material</div>
<div class='tes-p'>$amortecedor->material</div>
<div class='tes-p'>$bateria->material</div>
<div class='tes-p'>$correia->material</div>
<div class='tes-p'>$cilindro->material</div>
<div class='tes-p'>$freios->material</div>
<div class='tes-p'>$bobina->material</div>
</section>

<section class='container-2'>
<div class='espaço-p'>Reposição:</div>
<div class='tes-p4'>$alternador->replacement</div>
<div class='tes-p'>$amortecedor->replacement</div>
<div class='tes-p'>$bateria->replacement</div>
<div class='tes-p'>$correia->replacement</div>
<div class='tes-p'>$cilindro->replacement</div>
<div class='tes-p'>$freios->replacement</div>
<div class='tes-p'>$bobina->replacement</div>
</section>

<section class='container-2'>
<div class='espaço-p'>Prazo para</br>Montagem:</div>
<div class='tes-p5'>$alternador->deadlineforassembly</div>
<div class='tes-p'>$amortecedor->deadlineforassembly</div>
<div class='tes-p'>$bateria->deadlineforassembly</div>
<div class='tes-p'>$correia->deadlineforassembly</div>
<div class='tes-p'>$cilindro->deadlineforassembly</div>
<div class='tes-p'>$freios->deadlineforassembly</div>
<div class='tes-p'>$bobina->deadlineforassembly</div>
</section>

<section class='container-2'>
<div class='espaço-p'>Modelo:</div>
<div class='tes-p6'>$alternador->form</div>
<div class='tes-p'>$amortecedor->form</div>
<div class='tes-p'>$bateria->form</div>
<div class='tes-p'>$correia->form</div>
<div class='tes-p'>$cilindro->form</div>
<div class='tes-p'>$freios->form</div>
<div class='tes-p'>$bobina->form</div>
</section>

<section class='container-2'>
<div class='espaço-p'>Largura</div>
<div class='tes-p7'>$alternador->widht</div>
<div class='tes-p'>$amortecedor->widht</div>
<div class='tes-p'>$bateria->widht</div>
<div class='tes-p'>$correia->widht</div>
<div class='tes-p'>$cilindro->widht</div>
<div class='tes-p'>$freios->widht</div>
<div class='tes-p'>$bobina->widht</div>
</section>

<section class='container-2'>
<div class='espaço-p'>Altura:</div>
<div class='tes-p8'>$alternador->height</div>
<div class='tes-p'>$amortecedor->height</div>
<div class='tes-p'>$bateria->height</div>
<div class='tes-p'>$correia->height</div>
<div class='tes-p'>$cilindro->height</div>
<div class='tes-p'>$freios->height</div>
<div class='tes-p'>$bobina->height</div>
</section>

<section class='container-2'>
<div class='espaço-p'>Peso:</div>
<div class='tes-p9'>$alternador->weight</div>
<div class='tes-p'>$amortecedor->weight</div>
<div class='tes-p'>$bateria->weight</div>
<div class='tes-p'>$correia->weight</div>
<div class='tes-p'>$cilindro->weight</div>
<div class='tes-p'>$freios->weight</div>
<div class='tes-p'>$bobina->weight</div>
</section>

<section class='container-2'>
<div class='espaço-p'>Garantia:</div>
<div class='tes-p10'>$alternador->guarantee</div>
<div class='tes-p'>$amortecedor->guarantee</div>
<div class='tes-p'>$bateria->guarantee</div>
<div class='tes-p'>$correia->guarantee</div>
<div class='tes-p'>$cilindro->guarantee</div>
<div class='tes-p'>$freios->guarantee</div>
<div class='tes-p'>$bobina->guarantee</div>
</section>";

?>

</body>
</html>