<div class="titulo">Argumentos Variáveis</div>

<?php

function soma($a, $b){
    return $a + $b;
}

echo soma(5, 60);

function somarTudo(...$args){
    $soma = 0;
    foreach($args as $num){
        $soma += $num;
    }
    return $num;
}

echo '<br>';
echo somarTudo(5, 25, 35);

function membros($titular, ...$dependentes){
    echo 'Titular '. $titular .'<br>';
    if($dependentes){
        foreach($dependentes as $key=>$value){
            echo 'dependente '. $key .' '. $value .'<br>';
        }
    }
}
echo '<br>';
echo membros('joao', 'arthur', 'alex', 'poatan');