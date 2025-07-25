<?php 
/**
 * Retorna um texto representativo do dia da semana
 * @param int $dia Dia da semana
 * @return string Retrona o dia da semana em texto
 */
function diaDaSemana(int $dia): string{
    switch($dia){
        case 1:
            return "Domingo";
        break;    
        case 2:
            return "Segunda Feira";
        break;    
        case 3:
            return "Terça Feira";
        break;    
        case 4:
            return "Quarta Feira";
        break;    
        case 5:
            return "Quinta Feira";
        break;    
        case 6:
            return "Sexta Feira";
        break;    
        case 7:
            return "Sábado";
        break;    
        default:
            return "Dia da semana inválido"; 
        break;   
    }
}

echo diaDaSemana(2);
?>