<?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    echo 'A categoria do atleta é: ';

    if (($peso >= 50 && $peso < 60) AND ($altura < 1.70)){
        echo 'Novato';
    }elseif(($peso >= 60 && $peso <= 80) AND ($altura >= 1.70 && $altura < 1.90)){
        echo 'Profissional';
    }else{
        echo 'Eu sou uma piada para você? Informe o peso e altura correspondente.';
    }

    
?>