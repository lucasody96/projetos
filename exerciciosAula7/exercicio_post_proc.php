<?php

    $numero_hectares = $_POST['numero_hectares'];
    $quantidade_m3 = $_POST['quantidade_m3'];
    $custo_m3 = $_POST['custo_m3'];

    echo "Número de hectares: ".$numero_hectares;
    echo "<br>";
    echo "Quantidade de M³ de água: ".$quantidade_m3;
    echo "<br>";
    echo "Custo de M³ de água: R$ ".$custo_m3;
    echo "<br>";
    $numero_convertido = number_format($custo_m3, 2, ',', '.');
    echo "Custo de M³ de água: R$ ".$numero_convertido;
    echo "<br>";

?>
