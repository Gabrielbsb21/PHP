<div class="titulo">Foreach</div>
<?php
$superHerois = ['Flash', 'Super Homem', 'Lanterna Verde', 'Homem aranha', 'Homem de Ferro'];

foreach($superHerois as $heroi) {
    echo "$heroi <br>";
}

foreach($superHerois as $indice => $heroi) {
    echo "$indice => $heroi <br>";
}

$matriz = [
    [1, 2, 3, 4, 5, 6],
    [7, 8, 9, 10, 11]
];

foreach($matriz as $linhas) {
    foreach($linhas as $valor) {
        echo "$valor";
    }
    echo "<br>";
}
phpinfo();

?>

