<div class="titulo">Argumentos Variáveis</div>


<?php

function saudacao($nome='Senhor(a)', $sobrenome='Cliente'){
    return "ola $nome $sobrenome " . "<br>";
}
echo saudacao('mestre', 'dos magos');
saudacao();
function comer($hambuerguer, $bebida = 'agua'){
    echo 'primeiro pedido ' . $hambuerguer . '<br>';
    echo 'Acompanhamento ' . $bebida . '<br>';
}
echo comer('arroz');


