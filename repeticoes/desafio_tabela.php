<div class="titulo">Desafio Tabela</div>

<?php
$matriz =[
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
    [11, 12, 13, 14, 15],
    [16, 17, 18, 19, 20]
];

?>

<table>
    <?php
        foreach($matriz as $linha) {
            echo '<tr>';
            foreach($linha as $valor) {
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
    ?>
</table>



<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>