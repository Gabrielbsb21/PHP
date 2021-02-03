<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens() {
    echo "Bem-vindo a sua primeira função, Jedi!";
    echo '<br>';
}

imprimirMensagens();

$variavel = 1;
function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
?>