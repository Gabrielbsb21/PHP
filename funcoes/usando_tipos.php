<div class="titulo">Usando Tipos</div>

<?php
function somar($a, $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar(1, 2) . '<br>';

function somar2(int $a, int $b) {
    echo "<span>Somando com a função 2) $a + $b = </span>";
    return $a + $b;
}

echo somar(3, 2) . '<br>';
echo somar2(1.2, 2.5) . '<br>';

function somar3($a, $b): int {
    echo "<span>Somando com a função 3) $a + $b = </span>";
    return $a + $b;
}

echo somar3(4.2, 5.5) . '<br>';
?>