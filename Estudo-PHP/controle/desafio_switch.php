<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <label for="">Digiter o valor:</label>
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="fah-celsius"> Fahrenheit > Celsius</option>
        <option value="celsius-fah">Celsius > Fahrenheit</option>
    </select>
    <button>Calcular</button>
</form>


<?php
$param = $_POST['param'] ?? 0;
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;


switch($_POST['conversao']) {
    case 'km-milha': 
        $distancia = $param  * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km';
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km";
        break;
    case 'km-metro': 
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
        break;
    case 'fah-celsius':
        $temperatura = ($param - 32) * 5/9;
        $mensagem = "$param Fahrenheit = $temperatura Celsius";
        break;
    case 'celsius-fah':
        $temperatura = ($param * 9/5) + 32;
        $mensagem = "$param Celsius = $temperatura Fahrenheit";
}


echo "<p>$mensagem</p>";

?>

<style>
    form > * {
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