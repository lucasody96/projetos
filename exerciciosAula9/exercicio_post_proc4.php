<?php

    //$quantidade = $_POST['quantidade'];
    $salario_atual = $_POST['salario_atual'];
    $cod_cargo = $_POST['cod_cargo'];

    function imprimeRecibo($salario_atual, $cod_cargo){

        if ($cod_cargo == 91){

            $diferenca = ($salario_atual*10)/100; 
            $salario_novo = $diferenca + $salario_atual;
        }elseif($cod_cargo == 92){

            $diferenca = ($salario_atual*20)/100; 
            $salario_novo = $diferenca + $salario_atual;
        }elseif($cod_cargo == 93){

            $diferenca = ($salario_atual*30)/100; 
            $salario_novo = $diferenca + $salario_atual;

        }else{
            $diferenca = ($salario_atual*35)/100; 
            $salario_novo = $diferenca + $salario_atual;
        }

        echo 'Salário com aumento: R$ '.number_format($salario_novo, 2, '.', ',').'<br>';
        echo 'valor do aumento: R$ '.number_format($diferenca, 2, '.', ',').'<br>';  
        return;

    }

    
    echo 'Salário antigo: R$ '.number_format($salario_atual, 2, '.', ',').'<br>';
    echo imprimeRecibo($salario_atual, $cod_cargo).'<br>';

?>