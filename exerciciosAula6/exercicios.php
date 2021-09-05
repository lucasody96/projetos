<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <h1>Exercícios aula 6</h1>
    </head>
    <body>
        <h2>Cadastrar nota do aluno - Exercício 1</h2>
        <form method="GET" action="exerciciosAula6\exercicio_get1_proc.php">
            
            <labe>Nota do aluno: </labe>
            <input type="text" name="nota_aluno" placeholder="Digite o nota do aluno" required><br><br>
                
            <input type="submit" value="resultado">
            
        </form>

        <h2>Dados funcionário - Exercício 2</h2>
        <form method="GET" action="exerciciosAula6\exercicio_get2_proc.php">
            
            <labe>Código do cargo: </labe>
            <input type="number" name="codigo_cargo" placeholder="Digite o código do cargo" required><br><br>
              
            <labe>Salário: </labe>
            <input type="float" name="salario" placeholder="Digite o salário" required><br><br>

            <input type="submit" value="Consultar folha salarial">
            
            
        </form>
    
        

    </body>
</html>