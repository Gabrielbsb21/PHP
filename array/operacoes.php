<div class="titulo">Operações </div>

<?php
$dados1 = ["nome" => "Anakin Skywalker", "idade" => 22];
$dados2 = ["naturalidade" => "Tatooine"];
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);
echo '<br>' . is_array($dadosCompletos); 
echo '<br>' . count($dadosCompletos); 
echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);
$impares = [1, 3, 5, 7, 9, 11];
$pares = [2, 4, 6, 8, 10, 12];
$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);
sort($decimais);
echo '<br>';
print_r($decimais);
?>