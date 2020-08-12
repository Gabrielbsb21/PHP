<div class="titulo">Desafio Meses</div>
<p>Pegar o mês pelo seu índice. Ex:</p>
<p><code>$meses[1] = Janeiro</code></p>
<p><code>$meses[4] = Abril</code></p>
<hr>
<?php
$meses = array(1 => "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
print_r($meses);
echo '<hr>';
echo '<br>' .$meses[1];
echo '<br>' .$meses[4];
echo '<br>' .$meses[5];
echo '<br>' .$meses[12];
?>