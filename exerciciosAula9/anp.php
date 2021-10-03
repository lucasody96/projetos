<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<body>
  
   <h1>ANP - Passagem de valor e referência</h1>
   <?php
      $num_hectares = 1287;
      echo "Número de hectares da fazenda: ".$num_hectares."<br>";
      $num_safras = 3;
      echo "Número de safras: ".$num_safras."<br>";
      $gasto_agua = 5267;
      echo "Gasto de água: ".$gasto_agua."<br>";
      $custo_m3 = 0.17;
      echo "Custo de M³: ".$custo_m3."<br>";
      $custo_implantacao = number_format((1000.00/12),2 ,'.',',');
      echo "Em cada hectare deve ser acrescentado o custo da implantação do
      sistema de irrigação no valor de R$ ".$custo_implantacao." por safra"."<br>";
      echo "<br>";

      function custoSafra(&$custo_implantacao, $num_hectares, $gasto_agua, $custo_m3){

         $total_m3gasto = $num_hectares * $gasto_agua;
         
         $total_valorirrigacao = $custo_implantacao+($total_m3gasto * $custo_m3);
         echo "total de custo de irrigação de uma safra: R$ ".number_format(($total_valorirrigacao), 2, ',', '.')."<br>";
         return "total de gasto de água de uma safra: ".$total_m3gasto." m³"."<br>";
      }

      echo custoSafra($custo_implantacao, $num_hectares, $gasto_agua, $custo_m3);
      echo "<br>";
      
      for ($i = 1; $i <= 3; $i++) {

         $contador = $i;
         
         if($contador = 3){

            $total_m3ano = ($num_hectares * $gasto_agua) * 3;
            $total_custoano = ($custo_implantacao+( ($num_hectares * $gasto_agua )* $custo_m3)) * 3;

         }
                  
      }
      echo "Total de água gasto no ano: ".$total_m3ano." m³"."<br>";
      echo "Total de custo de implantação no ano: R$".$total_custoano." m³"."<br>"; 

      $total_5anos = $total_custoano * 5;
      echo "Total de custo a cada 5 anos: R$ ".number_format($total_5anos,2, ',', '.')."<br>";





   ?>