<div class="titulo">Funções Anônimas</div>

<?php

$somar = function ($a, $b){
    return $a + $b;
};

echo $somar(5, 9);
echo '<br>';

function calcular($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    return print "$a $op $b = $resultado";
}

calcular(5, 8, '+', $somar);
echo '<br>';

$multiplicar = function($a, $b){
    return $a * $b;
};

calcular(5, 25, '+', $multiplicar);
echo '<br>';