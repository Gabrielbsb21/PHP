<div class="titulo">Switch</div>
<?php

$categoria = 'SUV';
$preco = 0.0;
$carro = '';
// Exemplo com if
if($categoria === 'luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} else if ($categoria === 'sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

// Exemplo com Switch

$categoria = '???';
switch($categoria) {
    case 'Luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'SUV':
    case 'suv':
        $carro = 'Renegade';
        $preco = 80000; 
    break;   
    case 'Sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
}


$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
?>
