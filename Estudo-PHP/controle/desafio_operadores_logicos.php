<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> segunda e quarta!
    - Se os dois forem executados -> TV 50 e Sorvete
    - Se apenas um for executado -> TV 32 e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Segunda):</label>
        <select name="t1" id="t1">  
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <div>
        <label for="t2">Trabalho 2 (Quarta):</label>
        <select name="t2" id="t2">  
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<style>
    button, select {
        font-size: 1.8rem;
    }
    button {
        border-radius: 10%;
        cursor: pointer;
    }
    button:hover{
        background-color: #1867c0;
        color: white;
    }
</style>


<?php
if(isset($_POST['t1']) && isset($_POST['t2'])) {
    $trabalho_1 =  $_POST['t1'];
    $trabalho_1 = intval($trabalho_1);
    $trabalho_2 = $_POST['t2'];
    $trabalho_2 = intval($trabalho_2);

    if($trabalho_1 === 1 and $trabalho_2 === 1) {
        echo '<p>Vai comprar tv 50 e tomar sorvete</p>';
    } else if ($trabalho_1 === 1 || $trabalho_2 === 1) {
        echo '<p>Vai comprar tv 32 e tomar sorvete </p>';
    } else if($trabalho_1 === 0 and $trabalho_2 === 0 ) {
        echo '<p>Fica em casa que é mais saudável e não vai ter tv</p>';
    }
}


?>