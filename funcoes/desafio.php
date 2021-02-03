<div class="titulo">Desafio Palindromo</div>

<?php

/*nessa solução usei funções que o php disponibiliza*/

function palindromo($palavra) {
    $palavra = strtolower($palavra);
    $palavraPalindromo = strrev($palavra);
    if($palavraPalindromo === $palavra) {
        return 'Essa é uma palavra palindromo';
    } else {
        return 'Essa não é uma palavra palindromo';
    }
}

echo palindromo('ana') . '<br>';
echo palindromo('bola') . '<br>';
echo palindromo('Ana');
?>