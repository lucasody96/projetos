<?php

    //$quantidade = $_POST['quantidade'];
    $salario_atual = $_POST['salario_atual'];
    $cod_cargo = $_POST['cod_cargo'];

    function imprimeRecibo($salario_atual, $cod_cargo){

        switch($cod_cargo){
            case 1:
                $diferenca = ($salario_atual*50)/100; 
                $salario_novo = $diferenca + $salario_atual;
                $cargo = "Escriturário";
            break;

            case 2:
                $diferenca = ($salario_atual*35)/100; 
                $salario_novo = $diferenca + $salario_atual;
                $cargo = "Secretário";
            break;

            case 3:
                $diferenca = ($salario_atual*20)/100; 
                $salario_novo = $diferenca + $salario_atual;
                $cargo = "Caixa";
            break;

            case 4:
                $diferenca = ($salario_atual*10)/100; 
                $salario_novo = $diferenca + $salario_atual;
                $cargo = "Gerente";
            break;

            case 5:
                $diferenca = ($salario_atual*5)/100; 
                $salario_novo = $diferenca + $salario_atual;
                $cargo = "Diretor";
            break;

            default:
              $cod_cargo = "código de departamento inválido" ;
            break;
        }

        if ($cod_cargo == "código de departamento inválido"){

           echo "código de departamento inválido";
           
        }else{
            echo 'Cargo: '.$cargo.'<br>';
            echo 'Salário com aumento: R$ '.number_format($salario_novo, 2, '.', ',').'<br>';
            echo 'valor do aumento: R$ '.number_format($diferenca, 2, '.', ',').'<br>';
        }    
        return;

        

    }

    
    echo 'Salário antigo: R$ '.number_format($salario_atual, 2, ',', '.').'<br>';
    
    echo imprimeRecibo($salario_atual, $cod_cargo).'<br>';

?>