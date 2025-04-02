<?php 
$numero1 = 10;
$numero2 = 9;
$soma = $numero1  + $numero2;

if ($soma > 20) {
    $mais8 = $soma + 8;
    echo "a soma dos numeros mais 8 é $mais8 </br>";
} else if ($soma <= 20) {
    $menos5 = $soma - 5;
    echo "a soma dos numeros menos 5 é $menos5";
} else {
    echo "inválido";
}
?>  