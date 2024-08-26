<div class="titulo">Argumentos e Retorno</div>

<?php

function obterMensagem(){
    return "Seja bem-vindo!";
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem-vindo, {$nome}!";
}
echo '<br>', obterMensagemComNome('wagner');
echo '<br>', obterMensagemComNome('tiago');

function soma($a, $b){
    return $a + $b;
}

$x = 95;
$y = 105;

echo '<br>', soma(25, 50);
echo '<br>', soma($x, $y);

function trocarValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;

trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}
trocarValorDeVerdade($variavel, 100);
echo '<br>', $variavel;

