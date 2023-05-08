<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Oficina EL Carron-Service</title>
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
class service {
    public $workload;
        public $formofpayment;
            public $cost;
                public $term;
                    public $discount;
                        public $guarantee;
                        }
                


$manutencao= new service;
$manutencao->workload ='Segunda a Sexta, das 10:00h até as 18:00h';
$manutencao->formofpayment ='O pagamento pode ser à vista ou parcelado</br> O pagamento pode ser em cédulas, cartão e/ou em pix.';
$manutencao->cost ='Custo fixo de R$50</br> mais o custo da peça.';
$manutencao->term ='Prazo fixo de 1 dia mais</br> o tempo de montagem da peça.';
$manutencao->discount ='À vista 5% de desconto.';
$manutencao->guarantee ='Garantia de 1 mês.';


echo "</br></br></br></br>";
echo    "<p class='tit'>Serviços</p></br></br></br></br>

<section class='container-s'>
<div class='espaço'>Carga Horária:</div>
<div class='tes'>$manutencao->workload</div>
</section>

<section class='container-s'>
<div class='espaço'>Forma de Pagamento:</div>
<div class='tes'>$manutencao->formofpayment</div>
</section>

</br></br></br></br>

<section class='container'>
<div class='top1'>Serviços</div>
<div class='top'>Custo:</div>
<div class='top'>Prazo:</div>
<div class='top'>Descontos:</div>
<div class='top'>Garantia:</div>
</section>

<section class='container'>
<div class='espaço'>Troca de</br> alternador</div>
<div class='tes'>$manutencao->cost</div>
<div class='tes'>$manutencao->term</div>
<div class='tes'>$manutencao->discount</div>
<div class='tes'>$manutencao->guarantee</div>
</section>

<section class='container'>
<div class='espaço'>Troca de Bateria</div>
<div class='tes'>$manutencao->cost</div>
<div class='tes'>$manutencao->term</div>
<div class='tes'>$manutencao->discount</div>
<div class='tes'>$manutencao->guarantee</div>
</section>

<section class='container'>
<div class='espaço'>Troca de Correia</div>
<div class='tes'>$manutencao->cost</div>
<div class='tes'>$manutencao->term</div>
<div class='tes'>$manutencao->discount</div>
<div class='tes'>$manutencao->guarantee</div>
</section>

<section class='container'>
<div class='espaço'>Troca de Cilindro</div>
<div class='tes'>$manutencao->cost</div>
<div class='tes'>$manutencao->term</div>
<div class='tes'>$manutencao->discount</div>
<div class='tes'>$manutencao->guarantee</div>
</section>

<section class='container'>
<div class='espaço'>Troca de Freios</div>
<div class='tes'>$manutencao->cost</div>
<div class='tes'>$manutencao->term</div>
<div class='tes'>$manutencao->discount</div>
<div class='tes'>$manutencao->guarantee</div>
</section>

<section class='container'>
<div class='espaço'>Troca de Bobina</div>
<div class='tes'>$manutencao->cost</div>
<div class='tes'>$manutencao->term</div>
<div class='tes'>$manutencao->discount</div>
<div class='tes'>$manutencao->guarantee</div>
</section>";
        

?>

</body>
</html>