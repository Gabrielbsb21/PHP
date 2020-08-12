<div class="titulo">Mapa</div>

<?php
$dados = array("idade" => 22, "cor" => "verde", "peso" => 50.00);
print_r($dados);
echo '<br>' .$dados["idade"];
echo '<br>';

$lista = array("a", "filme" => "Star Wars", "c"); #nao faz sentido usar os dois modos misturados
print_r($lista);

?>