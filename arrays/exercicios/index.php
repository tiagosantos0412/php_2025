<pre>
<?php 
//ex01
echo 
"<p>
    <strong>ex01</strong> - Crie um array chamado cidades; 
    <br>Deve conter o nome de 5 cidades que você quer visitar;
    <br>Imprima na tela o valor da terceira cidade deste array.
</p>";
$cidades = ['Atibaia', 'Ouro Fino', 'Monte Verde', 'Socorro', 'Campos do Jordão'];
echo "A terceira cidade do array cidades é: $cidades[2]";

//ex02
echo
"<p>
    <strong>ex02</strong> - Crie um array associativo chamado alunos;
    <br>As chaves são os nomes de 3 alunos e os valores a idade deles;
    <br>Imprima a idade do segundo aluno.
</p>";
$alunos = [
    'Administracao' => [
        1 => ['André de Sousa', 23],
        2 => ['Bruna do Nascimento', 19],
        3 => ['Camila dos Santos', 35],
        4 => ['Douglas Gonçalves', 42]
    ]
];
// echo '<pre>';
// var_dump($alunos);
// echo '</pre>';
echo 'A idade do segundo é '.$alunos["Administracao"][2][1];

echo
"<p>
    <strong>ex03</strong> - Crie um array chamado cores contendo 3 cores;
    <br>Adicione uma nova cor ao final do array;
    <br>Remova a primeira cor do array;
    <br>Imprima o array resultante.
</p>";
$cores = ['verde', 'branco', 'vermelho'];
array_push($cores, 'azul');
var_dump($cores);
array_shift($cores);
var_dump($cores);
?>
</pre>