<div class="titulo">Arrays Constantes</div>

<?php

const HEROIS = ['Homem Aranha', 'Flash'];
print_r(HEROIS);
echo '<br>' . HEROIS[0];
const CARROS = ["fiat" => "uno", "ford" => "fiesta"];
print_r(CARROS);
echo '<br>' . CARROS["ford"];

?>