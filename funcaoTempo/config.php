<?php
date_default_timezone_set('America/Sao_Paulo');
function ContandoTempo(string $dataHoje)
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($dataHoje);
    $diferenca = $agora - $tempo;
    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $hora = round($diferenca / 3600);
    $dia = round($diferenca / 86400);
    $semana = round($diferenca / 604800);
    $mes = round($diferenca / 2592000);
    $ano = round($diferenca / 31536000);

    if ($segundos <= 60) {
        return 'agora';
    } elseif ($minutos <= 60) {
        return $minutos == 1 ? 'Função criada há 1 minuto' : 'Função criada há ' . $minutos . ' minutos';
    } elseif ($hora <= 24) {
        return $hora == 1 ? 'Função criada há 1 hora' : 'Função criada há ' . $hora . ' horas';
    } elseif ($dia <= 1) {
        return $dia == 7 ? 'Função criada ontem' : 'Função criada há ' . $dia . ' dias';
    } elseif ($semana <= 4) {
        return $semana == 4 ? 'Função criada há' : 'Função criada há ' . $semana . ' semanas';
    } elseif ($mes <= 30) {
        return $mes == 1 ? 'Função criada há' : 'Função criada há ' . $mes . ' meses';
    } elseif ($ano <= 1) {
        return $ano == 1 ? 'Função criada há' : 'Função criada há ' . $ano . ' anos';

    }

}


?>