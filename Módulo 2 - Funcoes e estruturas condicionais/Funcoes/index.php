<pre>
<?php 
// function saudacao()
// {
//     echo 'Olá, mundo!';
// }

// saudacao();

function saudacao()
{
    return 'Olá, mundo!';
}

$retorno_funcao = saudacao();

echo $retorno_funcao;


/**
 * Somar dois ou três números
 * @param float $n1 primeiro número a ser somado
 * @param float $n2 segundo número a ser somado
 * @param float $n3 número opcional a ser somado
 * @return float soma dos números 
 */
function somar (float $n1, float $n2, float $n3 = null): float
{
    return $n1 + $n2 + $n3;
}

$soma = somar(4, 8, 12);

echo "<p>$soma</p>";
var_dump($soma);

/** 
 * Verifica a idade do usuário de acordo com o ano de nascimento
 * @param int $anoNascimento ano de nascimento do usuário
 * @return int retorna a idade do usuário
 */
function verificarIdade(int $anoNascimento): int
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}


/**
 * Verifica se o usuário pode ou não entrar em um lugar 18 +
 * @param int $anoNascimento ano do nascimento do usuário
 * @param bool $acompanhante verifica se o usuário está acompanhado com alguém maior de idade
 * @return string Retorna uma string de acordo com a idade ou se está acompanhado
 */
function portaoDeBalada($anoNascimento, bool $acompanhante = false): string
{
    $idadePermitida = 18;
    $idade = verificarIdade($anoNascimento);

    if($idade >= $idadePermitida)
    {
        return "Você tem $idade anos, pode entrar!";
    }
    elseif($idade < $idadePermitida && $acompanhante)
    {
        return "Você tem $idade anos, só pode entrar com um acompanhante maior de idade.";
    }
    else
    {
        return "Você não pode entrar!";
    }
}

echo "<p>Maior de idade sem acompnhante.</p>";
$portaria = portaoDeBalada(1986);
echo "<p>$portaria</p>";

echo "<p>Menor de idade com acompnhante.</p>";
$portaria = portaoDeBalada(2009, true);
echo "<p>$portaria</p>";

echo "<p>Menor de idade sem acompnhante.</p>";
$portaria = portaoDeBalada(2009);
echo "<p>$portaria</p>";

//Parâmetros nomeados

/**
 * Concatena os dados do usuário e retorna um texto de saudação
 * @param string $nome nome do usuário
 * @param string $sobrenome sobrenome do usuário
 * @param int $idade idade do usuário
 * @return string retorna uma saudação com as informações nome, sobrenome e idade.
 */
function parametrosNomeados(string $nome, string $sobrenome, int $idade): string
{
    return "Olá $nome $sobrenome, você tem $idade anos!";
}

echo parametrosNomeados(idade: 38, sobrenome: 'Felipe', nome: 'Tiago' );


?>
</pre>