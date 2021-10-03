<?php

    $peso = $_POST['peso'];

    echo 'A categoria do atleta é: ';

    if ($peso <= 60){
        echo 'Novato';
    }else{
        echo 'Profissional';
    }

    
?>
