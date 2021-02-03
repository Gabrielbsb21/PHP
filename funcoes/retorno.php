<div class="titulo">Função e seus retornos</div>

<?php
function obterMensagem() {
    return 'Seja bem-vindo(a)';
}

$mensagem = obterMensagem();
echo $mensagem . '<br>';

function obterMensagemComNome($nome) {
    return "Bem-Vindo, {$nome}!";
}

$mensagem2 = obterMensagemComNome("Flash");
echo $mensagem2 . '<br>';

function soma($numero1, $numero2) {
    return $numero1 + $numero2;
}

echo soma(2, 4);
?>