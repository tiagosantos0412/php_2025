<?php 
//Introdução aos arrays

//arrays simples
$nomes = ['Tiago', 'Viviane', 'Raul'];
//arrays associativos
$idades = [
    'Tiago' => 38,
    'Viviane' => 27,
    'Raul' => 0.4
];

echo $nomes[2]. ' '.$idades['Raul'];
echo '<pre>';
var_dump($nomes);
var_dump($idades);
echo '</pre>';

//arrays dentro de arrays
$cadastro = [
    1 => [
        'nome' => 'Tiago Felipe dos Santos',
        'idade' => 38,
        'email' => 'tiagosantos0412@gmail.com',
        'senha' => 'senha@1234'
    ],
    2 => [
        'nome' => 'Viviane Assis dos Santos',
        'idade' => 27,
        'email' => 'assisv@outlook.com',
        'senha' => 'senha@1234'
    ]
];

echo '<pre>';
var_dump($cadastro);
echo '</pre>';

echo "<h2>Exibindo as informações do array cadastro</h2>";
echo '<p>Nome: '.$cadastro[1]['nome'].'</p>'; 
echo '<p>Idade: '.$cadastro[1]['idade'].'</p>'; 
echo '<p>Email: '.$cadastro[1]['email'].'</p>'; 
echo '<p>Senha: '.$cadastro[1]['senha'].'</p>'; 

?>