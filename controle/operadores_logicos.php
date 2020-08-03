<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p>Negação Lógica</p> <hr>";
var_dump(true);
echo '<br>';
var_dump(!true);
echo '<br>';
echo '<br>';
echo "<p>Tabela Verdade 'AND' </p><hr>";
var_dump(true && true); // pode usar o and para substituir o '&&'
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
echo '<br>';
echo "<p>Tabela Verdade 'OR' </p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo '<br>';
echo "<p>Tabela Verdade 'XOR' </p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

echo '<br>';
echo "<p>Exemplo </p><hr>";
$idade = 62;
$sexo = 'F';

if($idade >= 60 && $sexo === 'F') {
    echo 'Pode se aposentar<br>';
} else if ($idade >= 65 && $sexo === 'M') {
    echo 'Pode se aposentar<br>';
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}
?>

<style>

p {
    font-weight: bold;
}

hr {
    margin-top: 0px;
}
</style>