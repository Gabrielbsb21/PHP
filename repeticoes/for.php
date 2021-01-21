<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo '<hr>';
$superHerois = ['Flash', 'Super Homem', 'Lanterna Verde'];
for($i = 0; $i < count($superHerois); $i++){
    echo "{$superHerois[$i]} <br>";
}

echo '<hr>';

$matriz = [
    [1, 2, 3, 4, 5, 6],
    [7, 8, 9, 10, 11]
];

for($i = 0; $i < count($matriz); $i++) {
    for($j = 0; $j < count($matriz[$i]); $j++) {
        echo "{$matriz[$i][$j]}";
    }
    echo " <br>";
}

?>