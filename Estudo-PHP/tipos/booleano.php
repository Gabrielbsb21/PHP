<div class="titulo">Tipo Booleano</div>

<?php 
    echo TRUE . '<br>';
    echo FALSE . '<br>';
    var_dump(true);
    echo '<br>' . is_bool(false);

// fazer as regras de conversões

    echo '<p>Regras</p>';
    echo '<br>' . var_dump((bool) 0); // apenas zero é false
    echo '<br>' . var_dump((bool) 20);
    echo '<br>' . var_dump((bool) -5);
    echo '<br>' . var_dump((bool) "");
    echo '<br>' . var_dump((bool) " ");
    echo '<br>' . var_dump((bool) "0"); // false
    echo '<br>' . var_dump((bool) "00");
?>