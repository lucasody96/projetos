<?php

    //$nome_cliente = $_GET['nome_cliente'];
    // $nome_cliente = filter_input(INPUT_GET, "nome_cliente", FILTER_SANITIZE_STRING);
    // $email_cliente = filter_input(INPUT_GET, "email_cliente", FILTER_SANITIZE_EMAIL);

    // echo "Nome do cliente: " . $nome_cliente . "<br>";
    // echo "E-mail do cliente: " . $email_cliente . "<br>";
    function imprimeAumento($salario, $percentual){
            
        $total_aumento = $salario * ($percentual/100);

        return $total_aumento;
    };

    function imprimeSalarioFinal($salario, $total_aumento){

        $salario_final = $salario + $total_aumento;

        return $salario_final;
    };


    $codigo_cargo = filter_input(INPUT_GET, "codigo_cargo", FILTER_SANITIZE_STRING);
    $salario = filter_input(INPUT_GET, "salario", FILTER_SANITIZE_STRING);

    if ($codigo_cargo == 1){
        
        $nome_cargo = "Escriturário";
        echo "Cargo: ".$nome_cargo."<br>";
        echo "Salário atual: ".$salario."<br>";
        
        $percentual = 50;
        echo "Total de aumento: ".imprimeAumento($salario, $percentual)."<br>";
        
        $total_aumento = imprimeAumento($salario, $percentual);
        
        echo "Total salário com aumento: ".imprimeSalarioFinal($salario, $total_aumento)."<br>";

    };

    if ($codigo_cargo == 2){
        
        $nome_cargo = "Secretário";
        echo "Cargo: ".$nome_cargo."<br>";
        echo "Salário atual: ".$salario."<br>";
        
        $percentual = 35;
        echo "Total de aumento: ".imprimeAumento($salario, $percentual)."<br>";
        
        $total_aumento = imprimeAumento($salario, $percentual);
        
        echo "Total salário com aumento: ".imprimeSalarioFinal($salario, $total_aumento)."<br>";

    };

    if ($codigo_cargo == 3){
        
        $nome_cargo = "Caixa";
        echo "Cargo: ".$nome_cargo."<br>";
        echo "Salário atual: ".$salario."<br>";
        
        $percentual = 20;
        echo "Total de aumento: ".imprimeAumento($salario, $percentual)."<br>";
        
        $total_aumento = imprimeAumento($salario, $percentual);
    
        echo "Total salário com aumento: ".imprimeSalarioFinal($salario, $total_aumento)."<br>";

    };

    if ($codigo_cargo == 4){
        
        $nome_cargo = "Gerente";
        echo "Cargo: ".$nome_cargo."<br>";
        echo "Salário atual: ".$salario."<br>";
        
        $percentual = 10;
        echo "Total de aumento: ".imprimeAumento($salario, $percentual)."<br>";
        
        $total_aumento = imprimeAumento($salario, $percentual);

        echo "Total salário com aumento: ".imprimeSalarioFinal($salario, $total_aumento)."<br>";

    };

    if ($codigo_cargo == 5){
        
        $nome_cargo = "Diretor";
        echo "Cargo: ".$nome_cargo."<br>";
        echo "Salário atual: ".$salario."<br>";
        
        $percentual = 5;
        echo "Total de aumento: ".imprimeAumento($salario, $percentual)."<br>";
        
        $total_aumento = imprimeAumento($salario, $percentual);
        
        echo "Total salário com aumento: ".imprimeSalarioFinal($salario, $total_aumento)."<br>";

    };

   

?>