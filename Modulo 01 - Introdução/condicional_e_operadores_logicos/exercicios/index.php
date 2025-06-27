<pre>
<?php 
echo "Ex01 - Crie um script PHP que simula um sistema de login simples.
O sistema deve verificar se o nome de usuário e senha forncecidos estão corretos.
Se ambos estiverem corretos, exiba uma mensagem de boas vindas.
Se o nome do usuário estiver correto, más a senha estiver errada, exiba a mensagem:
Senha incorreta!.
Se o nome do usuário estiver incorreto, exiba a mensagem:
Nome de usuário incorreto!";

$tabela_usuario = [
    'usuario' => 'admin',
    'senha' => '123456'
];

$usuario = 'admin';
$senha = '123456';

if($usuario !== $tabela_usuario['usuario']){
    echo "<p>Usuário incorreto!</p>";
}
elseif($senha !== $tabela_usuario['senha']){
    echo "<p>Senha incorreta!</p>";
}
else {
    echo "<p>Bem vindo ".$tabela_usuario['usuario']."</p>";
}

echo "Ex02 - Crie um script PHP que verifica, se uma pesssoa pode entrar em uma festa.
Para entrar na festa, a pessoa precisa ter pelo menos 18 anos, ou estar acompanhada por um responsável.";

$idade = 17;
$acompnhante = true;

if($idade >= 18 || $acompnhante === true){
    echo "<p>Você pode entrar na festa!</p>";
}
else {
    echo "<p>Você não pode ebtrar na festa!</p>";
}

echo "Ex03 - Crie um script em PHP que determina se o cliente tem direito a um desconto especial
em uma loja e qual será o seu desconto.
O cliente tem direito a um desconto de 20% se o valor total de suas compras for maior que R$200,
ou se ele for um melbro VIP.
Se o valor total de compras estiver entre R$150 e R$200, o cliente pode receber um desconto de 20%.";

$cliente = 'Juliana';
$vip = true;
$valorCompra = 149;
$desconto = 0;

if($valorCompra > 200 || $vip === true){
    $desconto = 20;
    echo "<p>Parabéns!!!' $cliente', recebeu um desconto de 20%</p>";
}
else if($valorCompra >= 150 && $valorCompra <= 200){
    $desconto = 10;
    echo "<p>Parabéns!!!' $cliente', recebeu um desconto de 10%</p>";
}
else {
    $desconto = 0;
    echo "<p>' $cliente', não recebeu desconto!</p>";
}
$valor_do_desconto = ($valorCompra * $desconto) / 100;
$valorFinal = $valorCompra - $valor_do_desconto;

echo '<p><strong>Valor da compra...: '.$valorCompra.'</strong></p>';
echo '<p><strong>Desconto de...: -'.$desconto.'%'.'</strong></p>';
echo '<h2>Total a pagar...: '.$valorFinal.'</h2>';
?>
</pre>