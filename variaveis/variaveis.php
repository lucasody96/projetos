<div class = 'titulo'>Variáveis</div>

<?php
    $a= 'ValorA';

    var_dump($a);
    echo '<br>';
    echo $a;

    echo '<br>';

    //limpa o conteúdo da variável
    unset($a);

    //testa conteudo da variável
    $a= 'ValorB';
    if (isset($a)){
        echo $a;
    };

    echo '<br>';

    $nome = 'Lucas';
    $sobrenome = 'Ody';

    $nomecompleto = $nome.' '.$sobrenome;
    echo $nomecompleto;
    echo '<br>';

    $nome = 'Lucas';
    $sobrenome = 'Ody';

    echo "Meu nome é: $nome";
    
?>