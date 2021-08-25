<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Exercícios</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Desenvolvimento Web 2 -  PHP</h1>
        <h2>Visualização dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href="index.php" class="vermelho">Voltar</a>        

    </nav>    
    <main class="principal">
        <div class="conteudo">
            <?php
                // é um diretório conhecido. Mas não é melhor forma, colocar fixo.... pelo PHP tem como fazer
             //   include('teste/teste.php');
               // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                //aqui em que testar diretamente no browser (não está passando ainda por parâmetros.)
                //o caminho é passar via GET o parâmetro para ser executado.
                //a primeira coisa é resolver o diretório.
                //existe uma maneira mais fácil ainda para montar
                //{$_GET['dir']}
                //{$_GET['file']}
                include("{$_GET['dir']}/{$_GET['file']}.php");


            ?>
        </div>
    </main>
    <footer class="rodape">
        PROFESSOR & ALUNOS <?= date('Y');?>
    </footer>
</body>
</html>