<?php
$cont = 1;
$graos = 1;

while ($cont < 64) {
    $graos = $graos + ($graos * 2);
    $cont++;
}

echo $graos;
?>