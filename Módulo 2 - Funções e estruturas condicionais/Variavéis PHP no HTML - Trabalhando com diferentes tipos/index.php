<?php 
    require('src/includes/data.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Explorando Variáveis em PHP</title>    
</head>

<body>
    <div class="container">
        <div class="card">
            <h1><?=$titulo;?></h1>
            <p>Nome: <strong><?=$nome;?></strong></p>
            <p>Idade: <strong><?=$idade;?></strong></p>
            <p>Sexo: <strong><?=$sexo;?></strong></p>
            <p>Salário Mensal: <strong>R$ <?=number_format($salario, 2,',','.');?></strong></p>
            <p>Salário Anual: <strong>R$ <?=number_format($salario_anual, 2,',','.');?></strong></p>
            <p>Status de Emprego: <strong><?=$situacao_trabalhista;?></strong></p>  
            <p>Anos para Aposentadoria: <strong><?=$idade_aposentadoria - $idade;?></strong></p>
            <p>Habilidades: <strong>
                <?= 
                    implode(', ', $Habilidades);
                ?>
            </strong></p>
        </div>
    </div>
</body>

</html>