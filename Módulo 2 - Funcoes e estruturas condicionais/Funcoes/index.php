<pre>
<?php 
// // function saudacao()
// // {
// //     echo 'Olá, mundo!';
// // }

// // saudacao();

// function saudacao()
// {
//     return 'Olá, mundo!';
// }

// $retorno_funcao = saudacao();

// echo $retorno_funcao;

// function somar (float $n1, float $n2, float $n3 = null): float
// {
//     return $n1 + $n2 + $n3;
// }

// $soma = somar(4, 8, 12);

// echo "<p>$soma</p>";
// var_dump($soma);

// function verificarIdade(int $anoNascimento): int
// {
//     $anoAtual = date('Y');
//     $idade = $anoAtual - $anoNascimento;
//     return $idade;
// }

// function portaoDeBalada($anoNascimento, bool $acompanhante = false): string
// {
//     $idadePermitida = 18;
//     $idade = verificarIdade($anoNascimento);

//     if($idade >= $idadePermitida)
//     {
//         return "Você tem $idade anos, pode entrar!";
//     }
//     elseif($idade < $idadePermitida && $acompanhante)
//     {
//         return "Você tem $idade anos, só pode entrar com um acompanhante maior de idade.";
//     }
//     else
//     {
//         return "Você não pode entrar!";
//     }
// }

// echo "<p>Maior de idade sem acompnhante.</p>";
// $portaria = portaoDeBalada(1986);
// echo "<p>$portaria</p>";

// echo "<p>Menor de idade com acompnhante.</p>";
// $portaria = portaoDeBalada(2009, true);
// echo "<p>$portaria</p>";

// echo "<p>Menor de idade sem acompnhante.</p>";
// $portaria = portaoDeBalada(2009);
// echo "<p>$portaria</p>";

//Parâmetros nomeados

function parametrosNomeados(string $nome, string $sobrenome, int $idade): string
{
    return "Olá $nome $sobrenome, você tem $idade anos!";
}

echo parametrosNomeados(idade: 38, sobrenome: 'Felipe', nome: 'Tiago' );

?>
</pre>