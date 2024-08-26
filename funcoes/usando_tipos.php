<div class="titulo">Argumentos Variáveis</div>
function soma1($a, $b){
    echo "<span> soma de $a + $b = </span>";
    return $a + $b;
}
echo soma1(5, 15) . '<br>';
echo soma1(5, 15) . '<br>';
echo soma1(5, 15) . '<br>';
echo '<br>';

function soma2(int $a, int $b){
    echo "<span> soma de $a + $b = </span>";
    return $a + $b;
}
echo soma1(5, '4') . '<br>';

function soma3 ($a,$b) : int{
    echo "<span> soma de $a + $b = </span>";
    return $a + $b;
}
echo soma3(5.77, 8.6) . '<br>';
echo soma3(1.5, 2.6) . '<br>';
echo soma3(1.77, 0.9) . '<br>';
?>