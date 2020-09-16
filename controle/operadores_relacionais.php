<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1);
var_dump(1 > 1);
var_dump(4 < 23);
var_dump(8 <= 21);
var_dump(1 >= 1);
var_dump(1 != 1);

var_dump(111 == '111');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');
var_dump(1111 !== '1111');

echo "<h4>Relacionais nos operadores If/Else</h4><hr>";

$idade = 20;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo "<h4>Spaceship</h4><hr>";
var_dump(5 <=> 3); // retorna 1 se o valor da esquerda for maior que o da direita
var_dump(50 <=> 50); // retorna quando os valores são iguais
var_dump(5 <=> 13); // retorna -1 quando o valor da direita é maior que o da esquerda

echo "<h4>Valores pode ser V ou F</h4><hr>";
var_dump(!!5);
var_dump(!!"");
var_dump(!!" ");
var_dump(!!0);

?>

<style>
h4 {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}
</style>
