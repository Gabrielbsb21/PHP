<div class="titulo">Argumentos Variáveis</div>

<?php

function somaCompleta(...$numeros) {
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;

}

echo somaCompleta(1, 2, 3, 4) . '<br>';

function membros($titular, ...$dependentes) {
    echo "Titular: $titular <br>";
    foreach($dependentes as $dep) {
        echo "Dependentes: $dep <br>";
    }
}

membros("Anakin Skywalker", "Luke SkyWalker", "Princesa Leia");
?>