<div class="titulo">Atribuições</div>


<?php 
    $title = 'Atribuições';
    $numero = 10;
    echo '<br>' . $numero;
    $numero = $numero -1;
    echo '<br>' . $numero;
    $numero = $numero + 1.5;
    echo '<br>' . $numero;
    $numero--; // $numero = $numero - 1
    echo '<br>' . $numero;
    --$numero;
    echo '<br>' . $numero;
    $numero++; // $numero = $numero + 1
    echo '<br>' . $numero;
    ++$numero; // $numero = $numero + 1
    echo '<br>' . $numero;
    $numero -= 5;
    echo '<br>' . $numero; //$numero = $numero - 5
    $numero += 15;
    echo '<br>' . $numero; //$numero = $numero + 15
    $numero *= 15;
    echo '<br>' . $numero; //$numero = $numero * 15
    $numero /= 15;
    echo '<br>' . $numero; //$numero = $numero / 15
    $numero %= 15;
    echo '<br>' . $numero; //$numero = $numero % 15

    $filme = 'Star Wars';
    echo '<br>' . $filme;
    $filme = $filme . ' é o melhor filme';
    echo '<br>' . $filme;

    $variavelInexistente = 'valor existente';
    echo '<br>' . $variavelInexistente;
    $valor = $variavelInexistente ?? 'valor default'; //definindo um valor padrão
    echo '<br>' . $valor;
?>