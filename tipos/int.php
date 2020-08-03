<div class="titulo">Tipo Inteiro</div>

<?php 
    echo 11;
    echo '<br>';

    var_dump(11);
    echo '<br>';

    echo PHP_INT_MAX, '<br>'; //valor máximo suportado, nesse caso vai depender da arquitetura da sua maquina
    echo PHP_INT_MIN, '<br>';
    echo 011, '<br>'; //base octal
    echo 0b11, '<br>'; //base binária
    echo 0b110010101010, '<br>'; //base binária
    echo 0x11; //base hexadecimal

?>