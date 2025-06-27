<?php 
    /**
     * Lógica Booleana
     * Verdadeiro -> true = 1
     * Falso -> false = 0
     */

    $estudando_php = true;
    $estudando_nodeJs = false;

    echo '<p>Aluno estudando PHP: '.$estudando_php. '</p>';
    echo '<p>Aluno estudando nodeJs: '.$estudando_nodeJs. '</p>';

    //Exibindo os dados booleanos com var_dump()
    echo var_dump($estudando_php);
    echo var_dump($estudando_nodeJs);
?>