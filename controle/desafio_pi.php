<div class="titulo">Desafio PI</div>

<?php
echo pi() . '<br>';
$pi = 3.14;

if($pi === pi()) {
    echo "São iguais<br>";
} else {
    echo "Diferentes<br>";
}


if($pi - pi() <= 0.01) {
    echo "Praticamente iguais<br>";
} else {
    echo "Diferentes<br>";
}
?>