<?php 
$nomes = ['Tiago', 'Viviane', 'Raul'];

foreach ($nomes as $nome){
    echo "<p>Nome: $nome</p>";
}

//imprimindo a mesma coisa sem foreach
//$tamanho = count($nomes);
for($i = 0; $i < count($nomes); $i ++){
    echo "<p>Nome: $nomes[$i]</p>";
}

$dados = [
    'nome' => 'Tiago',
    'idade' => 38,
    'email' => 'tiagosantos0412@gmail.com'
];

foreach($dados as $chave => $valor){
    echo "<p>$chave: $valor</p>";
}
?>