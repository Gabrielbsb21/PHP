<div class="titulo">Map & Filter</div>

<?php

$notas = [5.8, 7.5, 9.9, 6.8];
$notasFinais = array_map(round, $notas);
print_r($notasFinais);

function aprovados($notas) {
    return $nota >= 7;
}


$apenasOsAprovados = array_filter($notas, aprovados);
echo $apenasOsAprovados;
?>