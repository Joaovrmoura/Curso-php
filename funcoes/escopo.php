<div class="titulo">Funções & Escopo</div>

<?php
function imprimirMensagens(){
    echo "ola ";
    echo "mundo<br>";
}
imprimirMensagens();

$variavel = 1;

function trocarValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "antes: $variavel <br>";
trocarValor();
echo "Depois: $variavel <br><br>";

function trocarValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo "Durante a funcão: $variavel escopo global <br>";
}
echo "antes: $variavel <br>";
trocarValorDeVerdade();
echo "Depois: $variavel <br>";
