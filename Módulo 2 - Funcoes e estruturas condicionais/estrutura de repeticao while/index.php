<?php 
$idade = 1;
$numero = 6;
$contador = 0;
$resultado = 0;

//verifica a condição para depois executar o código
while($contador <= 10){
    $resultado = $numero * $contador;
    echo "<p>$numero X $contador = $resultado</p>";
    $contador ++;
}

//executa o código para depois verificar a condição
do{
    echo "<p>A sua idade é $idade</p>";
}while($idade < 1);
?>