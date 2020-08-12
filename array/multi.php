<div class="titulo">Array Multidimencionais</div>
<?php
$dados = [
    [
        "nome" => "Peter Parke",
        "idade" => 25,
        "naturalidade" => "New York"
    ],
    [
        "nome" => "Leia",
        "idade" => 22,
        "naturalidade" => "Brasilia"
    ]
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['nome'];
echo '<br>';

$matriz = [1, 2, 3, 4, 5, 6, [7, 8, 9, 10, 11, 12]];
print_r($matriz);
echo '<br>' . $matriz[0];
echo '<br>' . $matriz[1];
?>