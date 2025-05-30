<?php 
    /**
     * Strings no PHP
     */

    //função strlen() retorna a quantidade de caracteres de uma string
    $nome = 'Tiago Felipe dos Santos';
    echo 'O nome '.$nome.' possui '.strlen($nome).' caracteres.';

    //função strpos() busca a posição de uma palavra em uma string
    $familia = 'Tiago, Vivi, Raul';

    $posicao = strpos($familia, 'Vivi');
    echo '<p>A palavra Vivi está na posição: '.$posicao.'</p>';

    $posicao = strpos($familia, 'Raul');
    echo '<p>A palavra Raul está na posição: '.$posicao.'</p>';

    //função substr() retorna uma parte de uma string
    $parteDaString = substr($familia, 13);
    echo '<p>Retrnando a parte da string família: '.$parteDaString.'</p>';
?>