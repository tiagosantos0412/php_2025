<?php 
    echo 'Hello World! </br>';
    /**
     * Vasriáveis
     */

    $primeiroNome = 'Tiago';
    $sobreNome = 'Felipe dos Santos';
    $idade = 38;
    $estadoCivil = 'Casado';
    $cpf = '36568593885';
    $email = 'tiagosantos0412@gmail.com';

    $cadastro = $primeiroNome . ' ' . $sobreNome . '</br>' .
        $idade . '</br>' .
        $estadoCivil . '</br>' .
        $cpf . '</br>' .
        $email;

    echo $cadastro;
?>