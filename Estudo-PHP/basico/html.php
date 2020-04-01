<div class="titulo">Integração HTML</div>

<h1>
    <?php
        echo 'Olá';
        echo '<small>'; // escrevendo código html dentro do php, porém isso não é uma boa prática
        echo ' Jedi';
        echo '</small>'; // escrevendo código html dentro do php, porém isso não é uma boa prática
    ?>
</h1>

<?= "<div>Outra forma de dizer 'Olá, Jedi!' </div>" ?>
<br>
<div><button><?= "Legal" ?></button></div>