<?php 
echo "sistema para verificar quantos anos o juca vai demorar para ficar maior que o chico  </br></br>";

$chicoAltura = 1.50;
$jucaAltura = 1.10;
$anos = 0;

while(true) {
    $chicoAltura = $chicoAltura + 0.02;
    $jucaAltura = $jucaAltura + 0.03;
    if ($jucaAltura > $chicoAltura) {
        echo "o juca demorou ". $anos . " anos para ficar maior que o chico";
        break;
    }
    $anos++;
}

?>