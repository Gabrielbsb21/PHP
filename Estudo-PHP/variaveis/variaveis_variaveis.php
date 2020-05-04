<div class="titulo">Variáveis Variáveis</div>

<?php 
    $a = 'valorA';
    $$a = 'valorAA'; //$aa cria uma variável que tem o nome do conteúdo de $a que nesse caso é valorA
    echo "$a {$$a} <br>";
    echo "variavel $valorA";
    echo '<br>';
    $epa = 'opa';
    $opa = 'vish';
    $vish = 'eita!!';
    echo "$epa {$$epa} {$$$epa}";
?>
