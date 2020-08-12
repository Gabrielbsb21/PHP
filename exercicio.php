<!DOCTYPE html>
<html lang="pt-brga">
    <head>
        <meta charset="UTF-8">
        <meta name="desciption" content="Template para Estudo da Linguagem PHP">
        <meta name="author" content="Gabriel Teixeira">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel=" shortcut icon" href="https://www.php.net/images/logos/new-php-logo.svg" type="image/svg" sizes="32x32">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
        <link rel="stylesheet" type="text/css" href="assets/css/exercicio.css">
        <title>Exercícios PHP</title>
    </head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Estudo PHP</h1>
            <H2>Visualização do Exercício</H2>
        </header>
        <nav class="navegacao">
            <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
            <a href="https://www.php.net/manual/pt_BR/intro-whatis.php" target="_blank" class="roxo">Documentação PHP</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php
                    //include($_GET['dir'] . "/teste.php");
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                ?>
            </div>
            
        </main>
        <footer class="rodape">
            Estudo PHP © <?= date('Y');?>
        </footer>
    </body>
</html>