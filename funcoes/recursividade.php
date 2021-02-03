<div class="titulo">Recursividade</div>

<?php

function soma($num) {
    $aux = 0;
    for($i = 1; $i <= $num; $i++) {
        $aux += $i;
    }

    return $aux;
}

echo soma(10) . '<br>';

?>