<?php 
    require('constants.php');
    
    $titulo = 'Ficha Cadastral';
    $nome = 'João Silva';
    $idade = 38;
    $sexo = 'M';
    $salario = 2210.30;
    $salario_anual = $salario * 12;
    $idade_aposentadoria = null;
    $situacao_trabalhista = true;
    $Habilidades = ['PHP', 'JavaScript', 'HTML', 'CSS'];

    //Operador ternário
    $situacao_trabalhista = $situacao_trabalhista == true ? 'Empregado' : 'Desempregado';

    if($sexo === 'm' || $sexo === 'M'){
        $idade_aposentadoria = IDADE_APOSENTADORIA_MASCULINA;
    }
    elseif($sexo === 'f' || $sexo === 'F'){
        $idade_aposentadoria = IDADE_APOSENTADORIA_FEMININA;
    }
    
?>