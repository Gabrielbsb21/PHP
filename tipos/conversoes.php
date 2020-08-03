<div class="titulo">Conversões</div>

<?php
    echo is_int(PHP_INT_MAX) . '<br>';

    // int para float
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3);
    echo '<br>';
    var_dump((int) 3.5);
?>