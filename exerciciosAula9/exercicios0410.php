<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<body>
  
    <h2>Exercicios PHP</h2>
    
    <h3>Exercício 1</h3>
    <form method="POST" action="exerciciosAula9\exercicio_post_proc1.php">
           <labe>
            Se o peso for igual ou menor que 60 o atleta é novato. Caso seja maior 
            que 60 é profissional.
            </labe>
            <br>   
           <labe>
           Informe o peso do atleta:
            </labe>
            <br>
            <br>
            <labe>Digite o peso do atleta: </labe>
            <input type="text" name="peso" placeholder="Digite o peso do atleta" required><br><br>
                
            <input type="submit" value="Resultado">
            
    </form>

    <h3>Exercício 2</h3>
    <form method="POST" action="exerciciosAula9\exercicio_post_proc2.php">
            <labe>
            A categoria do atleta é definida conforme os seguintes requisitos:
            </labe>
            <br>
            <labe>
                Se tiver entre 50Kg e 60Kg e altura menor que 1.70m : Novato
            </labe>
            <br>
            <labe>
                Se tiver peso >= 60Kg e peso <= 80kg, além de altura >= 1,70 < 1,90: Profissional.
            </labe>
            <br>
            <labe>Digite o peso do atleta: </labe>
            <input type="text" name="peso" placeholder="Digite o peso do atleta" required><br><br>
             
            <labe>Digite a altura do atleta: </labe>
            <input type="text" name="altura" placeholder="Digite o peso do atleta" required><br><br>

            <input type="submit" value="Resultado">
            
    </form>

    <h3>Exercício 3</h3>
    <form method="POST" action="exerciciosAula9\exercicio_post_proc3.php">
            
            <labe>Digite a quantidade de amoras compradas: </labe>
            <input type="text" name="quantidade" placeholder="Digite a quantidade de amoras compradas" required><br><br>
             
            <labe>Digite o nome do cliente: </labe>
            <input type="text" name="nome" placeholder="Digite o nome do cliente" required><br><br>

            <labe>Digite a idade do cliente: </labe>
            <input type="number" name="idade" placeholder="Digite a idade do cliente" required><br><br>

            <labe>Digite o sexo do cliente: </labe>
            <select name="sexo">
                <option value="masculino">masculino</option>
                <option value="feminino">feminino</option>
            </select>
            <br>
            <input type="submit" value="Resultado">
            
    </form>
    
    <h3>Exercício 4</h3>
    <form method="POST" action="exerciciosAula9\exercicio_post_proc4.php">
            
            <labe>Digite o salário atual do funcionário: </labe>
            <input type="float" name="salario_atual" placeholder="Digite o salário atual do funcionário" required><br><br>
             
            <labe>Digite o código do departamento do funcionário: </labe>
            <input type="number" name="cod_cargo" placeholder="Digite o código do departamento do funcionário" required><br><br>

            <input type="submit" value="Resultado">
            
    </form>

    <h3>Exercício 5</h3>
    <form method="POST" action="exerciciosAula9\exercicio_post_proc5.php">
            
            <labe>Digite o salário atual do funcionário: </labe>
            <input type="float" name="salario_atual" placeholder="Digite o salário atual do funcionário" required><br><br>
             
            <labe>Digite o código do departamento do funcionário: </labe>
            <input type="number" name="cod_cargo" placeholder="Digite o código do departamento do funcionário" required><br><br>

            <input type="submit" value="Resultado">
            
    </form>

</body>
</html>