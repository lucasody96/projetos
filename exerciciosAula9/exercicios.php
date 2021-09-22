<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <h1>Exercícios aula 9</h1>
    </head>
    <body>
        <h2>Exercício 1</h2>
        <?php

            $status = 1;
            echo "Status: "."<br>";
            echo verificaStatus($status);

            function verificaStatus($status){
                switch($status){
                    case 1:
                        echo "1 - Aguardando pagamento";
                    break;
                    case 2:
                        echo "2 - Pago";
                    break;
                    case 3:
                        echo "3 - Em trânsito";
                    break;
                    case 4:
                        echo "4 - Recebido";
                    break;
                    default:
                    echo "Status inválido";
                    break;
                }
                
            }

        ?>
        <h2>Exercício 2</h2>
        <?php

          
          
          function totalLucro(&$total_nota){
              $percentual = 0.7;
              $total_lucro = $total_nota+($total_nota * $percentual);
                return $total_lucro;
              
          }
          //number_format($custo_m3, 2, ',', '.');
          $total_nota = 5000;
          Echo "Total nota fiscal com lucro: R$ ".number_format(totalLucro($total_nota), 2, ',', '.')."<br>";
          
        ?>

    </body>
</html>