<?php

    $quantidade = $_POST['quantidade'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    function imprimeValorAPagar($quantidade){
        
        if(($quantidade > 0) and ($quantidade <= 10)){
            $valor = $quantidade * 3.00;
        }elseif(($quantidade > 10)){
            $valor = $quantidade * 2.00;
        }

        return $valor;
    }

    function imprimeAceitaCompra($nome, $idade, $sexo){
        
       if (($sexo = 'masculino') and ($idade >= 18 && $idade < 25)){
        echo 'Nome do cliente: '.$nome.'<br>';
        echo 'Sua compra foi aprovada';
       }else{
        echo 'Nome do cliente: '.$nome.'<br>';
        echo 'Sua compra foi reprovada';   
       }

        return ;
    }
    echo 'Total de valor a pagar: R$ '.number_format(imprimeValorAPagar($quantidade), 2, ',', '.').'<br>';
    echo imprimeAceitaCompra($nome, $idade, $sexo).'<br>';
    

    
?>
