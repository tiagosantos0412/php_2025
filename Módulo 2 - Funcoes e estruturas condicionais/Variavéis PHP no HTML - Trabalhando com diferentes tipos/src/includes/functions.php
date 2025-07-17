<?php 
/**
 * Cálculo do salário anual baseado no salário mensal
 * @param float $salarioMensal  Recebe o salário mensal do trabalhador
 * @return float $salarioAnual  Retorna o salário anual do trabalhador
 */
function calcularSalarioAnual(float $salarioMensal): string{
    $tercoDeFerias = $salarioMensal / 3;
    $salarioAnual = ($salarioMensal * 13) + $tercoDeFerias;
    return converterNumeroEmMoedaBr($salarioAnual);
}

/**
 * Calcula a quantidade de anos que faltam apara um trabalhador se aposentar
 * @param int $idade Recebe a idade da pessoa
 * @param string $sexo Recebe o sexo da pessoa
 * @return int Quantidade de anos que faltam para se aposentar
 */
function anosAposentadoria(int $idade, string $sexo): int{
    $idadeAposentadoria = $sexo == 'm' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
    return $idadeAposentadoria - $idade;
} 

/**
 * Transformar um numérico e retorna um valor monetário R$ BRL
 * @return string valor monetário R$
 */
function converterNumeroEmMoedaBr(float $numero): string{
    return number_format($numero, 2,',','.');
}
?>