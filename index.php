<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Desenvolvimento WEB - PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Desenvolvimento Web -  PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="aulas">
                <div class="aula verde">
                    <h3>Aula 2</h3>
                    <ul>
                        <!-- <li><a href="exercicio.php">Exercício A</a></li> -->
                        <li><a href="exercicio.php?dir=LayoutExercicios&file=LayoutExercicios">Template inicial</a></li>
                    </ul>
                </div>

                <div class="aula azul">
                    <h3>Aula 4</h3>
                    <ul>
                        <!-- <li><a href="exercicio.php">Exercício A</a></li> -->
                        <li><a href="exercicio.php?dir=Basico&file=ola">OLÁ PESSOAL</a></li>
                        <li><a href="exercicio.php?dir=Basico&file=comentarios">COMENTARIOS</a></li>
                        <li><a href="exercicio.php?dir=Basico&file=html">HTML INTEGRADO</a></li>
                        <li><a href="exercicio.php?dir=Basico&file=css">CSS INTEGRADO</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis">VARIÁVEIS</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">CONSTANTES</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">ATRIBUIÇÕES</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        PROFESSOR & ALUNOS <?= date('Y');?>
    </footer>
</body>
</html>