<?php 
    echo 'Hello World! </br>';
    /**
     * Variáveis
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

<?php 
    /**
     * Tipos primitivos
     */
    //String
    $texto = 'Exemplo de string'; //tipo string
    $numeroInteiro = 12; //tipo int 
    $numeroDecimal = 50.75; //tipo float ou double
    $booleano = true; //tipo booleano
?>