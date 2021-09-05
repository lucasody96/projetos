<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<body>
  
 
   <?php
        Echo 'Exercicio 1';

        function imprimirSoma($comissao, $salario){
            
            $total = $comissao + $salario;

            return $total;
        };
        echo '<br>';
        $comissao = 2320.29;
        echo 'Comissão = '.$comissao;
        echo '<br>';
        $salario = 7600.25;
        echo 'Salário = '.$salario;

        echo '<br>';
        echo 'Total salário em number:'.' '.imprimirSoma($comissao, $salario);
        echo '<br>';
        $numero_convertido = number_format(imprimirSoma($comissao, $salario), 2, ',', '.');
        echo 'Total salário em reais:'.' '.'R$'.' '.$numero_convertido;
        echo '<br>';
        echo '<br>';
    ?>
    
    <?php           
        Echo 'Exercicio 2';
        echo '<br>';
        
        function imprimeSalarioLiquido($comissao, $salario, $inss, $irrf){

            $total_lucros = $comissao + $salario;
            $total_impostos = $inss + $irrf;

            $total_liquido = $total_lucros - $total_impostos;
            return $total_liquido;
        };

        $comissao = 1321.45;
        echo 'Comissão = '.$comissao;
        echo '<br>';
        $salario = 7600.25;
        echo 'Salário = '.$salario;
        echo '<br>';
        $inss = 608.45;
        echo 'INSS = '.$inss;
        echo '<br>';
        $irrf = 1364.65;
        echo 'IRRF = '.$irrf;
        echo '<br>';

        echo 'Salário líquido: '.imprimeSalarioLiquido($comissao, $salario, $inss, $irrf);
        echo '<br>';
        $numero_convertido = number_format(imprimeSalarioLiquido($comissao, $salario, $inss, $irrf), 2, ',', '.');
        echo 'Salário líquido em reais:'.' '.'R$'.' '.$numero_convertido;
        echo '<br>';
        echo '<br>';
    ?>

    <?php
        Echo 'Exercicio 3';
        echo '<br>';
        
        function imprimeTotalParcela($valor_fatura, $num_parcelas){

           $total_fatura = $valor_fatura/$num_parcelas;
           return $total_fatura;
        };

        $valor_fatura = 1220.44;
        echo "Valor da compra = $valor_fatura";
        $num_parcelas = 4;
        echo '<br>';
        echo "Número de parcelas = $num_parcelas";
        echo '<br>';
        echo "O valor de cada parcela será ".imprimeTotalParcela($valor_fatura, $num_parcelas);
        echo '<br>';
        echo '<br>';
    ?>

    <?php
        Echo 'Exercicio 4';
        echo '<br>';
        
        function imprimeVendas($quantidade, $produto_a){

           $total_vendas = $quantidade * $produto_a;
           return $total_vendas;
        };

        $quantidade = 58;
        echo "Quantidade vendida do Produto: $quantidade";
        echo '<br>';
        $produto_a = 280.74;
        echo "Valor do produto A: $produto_a";
        echo '<br>';
        echo "Valor total de vendas: ".imprimeVendas($quantidade, $produto_a);
        $numero_convertido = number_format(imprimeVendas($quantidade, $produto_a), 2, ',', '.');
        echo '<br>';
        echo 'Valor total de vendas em reais:'.' '.'R$'.' '.$numero_convertido;
        echo '<br>';
        echo '<br>';

    ?>
   
    

        
        
   
    

</body>
</html>