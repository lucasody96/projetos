<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <h1>Exercícios aula 7</h1>
    </head>
    <body>
        <h2>Cadastro de custos de água</h2>
        <form method="POST" action="exerciciosAula7\exercicio_post_proc.php">
            <!-- Números de Hectares, quantidade de metros cúbicos de água, 
            campo para informar o custo por metros cúbicos de água, -->
            <labe>Número de hectares: </labe>
            <input type="text" name="numero_hectares" placeholder="Digite o número de hectares" required><br><br>

            <labe>Quantidade de M³ de água: </labe>
            <input type="number" name="quantidade_m3" placeholder="Digite o número de M³ de água" required><br><br>

            <labe>Custo de M³ de água: </labe>
            <input type="number" name="custo_m3" placeholder="Digite o custo do M³ de água" required><br><br>
                
            <input type="submit" value="resultado">
            
        </form>
    
        

    </body>
</html>