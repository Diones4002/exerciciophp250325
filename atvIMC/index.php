<?php

function IMCCalc($altura, $peso) {
    return $peso / ($altura * $altura);
}

$IMCDionizio = IMCCalc(1.69, 70);
$IMCGustavo = IMCCalc(1.65, 57);

function IMCResultado($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso normal";
    } else if ($imc >= 18.5 && $imc <= 24.9) {
        return "Peso Normal";
    }  else if ($imc >= 25 && $imc <= 29.9) {
        return "Excesso de Peso";
    } else if ($imc >= 30 && $imc <= 34.9) {
        return "Obesidade Classe I";
    } else if ($imc >= 35 && $imc <= 39.9) {
        return "Obesidade Classe II";
    } else if ($imc > 40) {
        return "Obesidade Classe III";
    }
}

echo "Sistema de Cálculo IMC </br></br>";
echo "
Tabela IMC:</br> 
Abaixo do Peso Menor que 18,5 </br>
Peso Normal 18,5 a 24,9 </br>
Sobrepeso 25 a 29,9 </br>
Obesidade Grau I 30 a 34,9 </br>
Obesidade Grau II 35 a 39,9 </br>
Obesidade Grau III Maior que 40 </br></br>
";

$IMCDionisioFormatado = sprintf("%.02f", $IMCDionizio);
$IMCGustavoFormatado = sprintf("%.02f", $IMCGustavo);

echo "O IMC do Dionizio é ". $IMCDionisioFormatado . ", Classificação: " . IMCResultado($IMCDionizio) . "</br>";
echo "O IMC do Gustavo é ". $IMCGustavoFormatado . ", Classificação: " . IMCResultado($IMCGustavo) . "</br>";
