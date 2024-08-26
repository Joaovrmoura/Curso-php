<div class="titulo">Desafio Palindromo</div>

<?php  
function  digitarNome(){
    $nome = readline("Digite seu nome: ");
    return $nome;
}
function acharPalindromo($nome){
    return $nome === strrev($nome);
}

function printarMensagen($nome, $nome_paliondromo){
    return $nome_paliondromo == $nome ? 
    "Nome {$nome} é um palindromo! <br>" : "Nome não é um palindromo!";
}

$digitar_nome = digitarNome();
$achar_palindromo = acharPalindromo($digitar_nome);
$mensagem = printarMensagen($digitar_nome, $achar_palindromo);
echo '<br>', $mensagem;
