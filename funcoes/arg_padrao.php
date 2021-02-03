<div class="titulo">Argumentos Padrões</div>
<?php
function saudacao ($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    echo "Bem vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao("Peter", "Parker");
?>