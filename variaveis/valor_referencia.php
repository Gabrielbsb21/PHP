<div class="titulo">Valor vs Referência</div>
<?php
    $variavel = 'valor inicial';
    echo $variavel;

    // Atribuição por valor
    $variavelValor = $variavel;
    echo '<br>';
    $variavelValor = 'novo valor';
    echo "$variavelValor <br>";

    // Atribuição por Referência 

    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referencia';
    echo "$variavelReferencia <br>";
    echo $variavel;

?>