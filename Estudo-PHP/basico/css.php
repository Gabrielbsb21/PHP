<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
        echo 'Olá';
        echo '<small>'; // escrevendo código html dentro do php, porém isso não é uma boa prática
        echo ' Jedi';
        echo '</small>'; // escrevendo código html dentro do php, porém isso não é uma boa prática
    ?>
</h1>

<?= "<div center azul>Outra forma de dizer 'Olá, Jedi!' </div>" ?>
<br>
<div center><button dobro ><?= "Legal" ?></button></div>

<style> 
    button {
        padding: 5px 20px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
        cursor: pointer;
    }

    [center] {
        display: flex;
        justify-content: center;

    }

    [azul]{
        color: #4286f4;
    }

    [dobro]{
        font-size: 2rem;
    }
</style>