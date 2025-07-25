<?php 
    //Exercícios com While
    //Crie um script para escrever a soma de todos os numeros de 1 a 20

    $contador = 0;
    $numero = 0;
    $soma = 0;

    while($contador <= 20){
        echo "<p>A variável soma está valendo: $soma e o contador está valendo $contador</p>";
        $soma += $contador;
        $contador ++;
    }
     echo "Soma de todos é igual a: $soma";

    //Exercícios com for
    //Escreva números de 1 a 10 com for

    for($i = 1; $i<=10; $i++){
        echo "<p>Número $i</p>";
    }

    //Escreva um script php que desenhe meio triangulo com asteriscos *
    //de 10 linhas por exemplo:
    /**
     * : *
     * : **
     * : ***
     * : continua
     */

    for($i = 1; $i<=10; $i++){
        for($j = 1; $j<= $i; $j++){
            echo "*";
        }
        echo "</br>";
    }

    //Exercícios com foreach
    //Crie um array de numeros ([1,2,3,4,5]) e use um loop foreach para
    //somar todos os elementos do array e imprimir o resultado.
    $array = [1,2,3,4,5];
    $somaArray = 0;
    foreach($array as $numeros){
        echo "<P>A variavel somaArray está valendo: $somaArray e o valor do array está valendo: $numeros</p>";
        $somaArray += $numeros;
    }
    echo "A soma dos elementos do array é: $somaArray";

    //Crie um array associativo de produtos com nome e preço
    //por exemplo: [*Produto 1* =>10, *Produto 2* => 20... ]
    //Use o loop foreach para imprimir o nome e o preço de cada produto.

    $produtos = [
        "Arroz Camil 5kg"     => 23.9,
        "Feijão KiCaldo 1kg"  => 6.8,
        "Açucar União 1kg"    => 3.95,
        "Coca Cola Zero 2L"   => 8.50
    ]; 
    foreach($produtos as $itens => $precos){
        echo"<p>Produto: $itens R$ $precos</p>";
    }
?>
