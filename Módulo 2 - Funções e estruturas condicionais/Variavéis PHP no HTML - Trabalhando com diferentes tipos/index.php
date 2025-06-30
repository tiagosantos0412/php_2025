<?php 
    $titulo = 'Ficha Cadastral';
    $nome = 'João Silva';
    $idade = 38;
    $sexo = 'M';
    $salario = 2210.30;
    $salario_anual = $salario * 12;
    $status_emprego = true;
    $idade_aposentadoria = null;
    $situacao_trabalhista = null;
    $Habilidades = ['PHP', 'JavaScript', 'HTML', 'CSS'];

    if($status_emprego){
        $situacao_trabalhista = 'Empregado';
    }
    else {
        $situacao_trabalhista=  'Desempregado';
    }

    if($sexo === 'm' || $sexo === 'M'){
        $idade_aposentadoria = 65;
    }
    elseif($sexo === 'f' || $sexo === 'F'){
        $idade_aposentadoria = 62;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 1.1em;
        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1><?=$titulo;?></h1>
            <p>Nome: <strong><?=$nome;?></strong></p>
            <p>Idade: <strong><?=$idade;?></strong></p>
            <p>Sexo: <strong><?=$sexo;?></strong></p>
            <p>Salário Mensal: <strong><?=$salario;?></strong></p>
            <p>Salário Anual: <strong><?=$salario_anual;?></strong></p>
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