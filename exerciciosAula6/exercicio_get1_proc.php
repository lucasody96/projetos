<?php

    //$nome_cliente = $_GET['nome_cliente'];
    $nota_aluno = filter_input(INPUT_GET, "nota_aluno", FILTER_SANITIZE_STRING);
    echo "Nota do aluno: " . $nota_aluno . "<br>";

    if (($nota_aluno >= 8.0) AND ($nota_aluno <= 10.0)){
        echo "Conceito do aluno: "."A"."<br>";
        echo "<br>";
    }
    
    if ($nota_aluno >= 7.0 && $nota_aluno <= 7.9){
        echo "Conceito do aluno: "."B"."<br>";
        echo "<br>";
    }

    if ($nota_aluno >= 6.0 && $nota_aluno <= 6.9){
        echo "Conceito do aluno: "."C"."<br>";
        echo "<br>";
    };

    if ($nota_aluno >= 5.0 && $nota_aluno <= 5.9){
        echo "Conceito do aluno: "."D"."<br>";
        echo "<br>";
    };

    if ($nota_aluno >= 0.0 && $nota_aluno <= 4.9){
        echo "Conceito do aluno: "."E"."<br>";
        echo "<br>";
    };

?>
