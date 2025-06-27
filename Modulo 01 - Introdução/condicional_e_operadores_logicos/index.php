<?php 
/**
 *  && ou and - E lógico (true se ambos forem true)
 *  || ou or - OU lógico (true se pelo menos um for true)
 *  xor - OU exclusivo (true se apenas um for true, mas não ambos)
 *  ! - NÃO lógico (inverte o valor)
*/
echo "<pre>";
$a = true;
$b = false;
// E lógico
var_dump($a && $b);  // bool(false)
// OU lógico
var_dump($a || $b);  // bool(true)
// OU exclusivo
var_dump($a xor $b); // bool(true)
// NÃO lógico
var_dump(!$a);       // bool(false)

//Lógica Condicional em PHP

$idade = 17;

if ($idade < 12) {
    echo "Criança";
} elseif ($idade < 18) {
    echo "Adolescente";
} elseif ($idade < 60) {
    echo "Adulto";
} else {
    echo "Idoso";
}


//Operador Ternário
$nota = 7;
$resultado = ($nota >= 6) ? "Aprovado" : "Reprovado";
echo $resultado;

echo "</pre>";
?>