<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma String';
    echo '<br>';
    var_dump('Eu também');
    echo '<br>';

// concatenação

    echo "Eu sou um" . ' Jedi!';
    echo '<br>';

    echo "'Teste' " . '"Teste"';

    print("<br> Também existe a função print");

// Algumas funções

    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('minimizado');
    echo '<br>' . ucfirst('só a primeira letra');
    echo '<br>' . ucwords('Todas as palavras');
    echo '<br>' . strlen('Star Wars melhor filme');
    echo '<br>' . mb_strlen("Eu também", "utf-8"); //considera encoding 
    echo '<br>' . substr('só uma parte mesmo', 7, 6); //a partir da posição 7, anda 6 posições, porém nao inclui a posição 6
    echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');
?>