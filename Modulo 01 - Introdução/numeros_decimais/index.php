<?php 
    $altura = 1.75;
    $peso = 103;
    //Arredondamento com a função round()
    $imc = round($peso / ($altura * $altura), 2);
    echo '<p>Seu IMC é de: '. $imc.'</p>'; 

    //Arredondamento de um numero para baixo com a função floor()
    echo '<p>Seu IMC arredondado para baixo com floor() é: '. floor($imc).'</p>';

    //Arredondamento de um numero para cima com a função ceil()
    echo '<p>Seu IMC arredondado para baixo com ceil() é: '. ceil($imc).'</p>';  
?>