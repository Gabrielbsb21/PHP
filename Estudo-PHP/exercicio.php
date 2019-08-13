<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercício</title>
        <link rel="stylesheet" type="text/css" href="recursos/css/estilo.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/exercicio.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet"> 
    </head>

    <body class="exercicio">
        <header class="cabecalho">
            <h1>Estudo em PHP</h1>
            <h2>Visualização do Exercício</h2>
        </header>
        <nav class="navegacao">
            <a href="#" class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>

        <main class="principal">
            <div class="conteudo">
                <?php
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                ?>
            </div>

        </main>

        <footer class="rodape">
            Gabriel Teixeira © <?= date('Y');?>
        </footer>

    </body>
</html>