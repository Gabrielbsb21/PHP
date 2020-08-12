<div class="titulo">Desafio Sorteio</div>
<p>Sempre que eu der um refresh na página, quero que apareça um nomem diferente de super héroi.<p/>
<?php
$nomesHerois = ["Homem de ferro", "Homem aranha", "Hulk", 
"Capitão America", "Thor", "Flash", "Lanterna Verde", "Super Homem", "Raio Negro"];
$index = array_rand($nomesHerois);
echo "<h1>$nomesHerois[$index]</h1>";
?>

<style>
    h1{text-align: center;}
</style>