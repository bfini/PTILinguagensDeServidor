<?php
// Função com as faixas de classificação de IMC
function obterFaixasIMC(): array {
    return [
        ['min' => 0.0,    'max' => 18.5,  'classificacao' => 'Magreza'],
        ['min' => 18.51,  'max' => 24.9,  'classificacao' => 'Saudável'],
        ['min' => 25.0,   'max' => 29.9,  'classificacao' => 'Sobrepeso'],
        ['min' => 30.0,   'max' => 34.9,  'classificacao' => 'Obesidade Grau I'],
        ['min' => 35.0,   'max' => 39.9,  'classificacao' => 'Obesidade Grau II'],
        ['min' => 40.0,   'max' => INF,   'classificacao' => 'Obesidade Grau III']
    ];
}

// Função para classificar o IMC
function classificarIMC(float $imc): string {
    $faixasIMC = obterFaixasIMC();

    foreach ($faixasIMC as $faixa) {
        if ($imc >= $faixa['min'] && $imc <= $faixa['max']) {
            return "Seu IMC é: " . number_format($imc, 2) . ", classificado como: " . $faixa['classificacao']  ;
        }
    }

    return "Valor de IMC inválido.";
}

// Teste
$resultado = classificarIMC(17.45);
echo $resultado;
?>