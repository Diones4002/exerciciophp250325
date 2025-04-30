<?php 
echo "sistema para verificar femeas elegiveis </br></br>";

$nome = "mariana";
$idade = 24;
$sexo = "feminino";

function verificar($sexo, $idade) {
    if ($sexo == "feminino" && $idade < 25) {
        return "ACEITA";
    } else {
        return "NAO ACEITA";
    }
}

echo verificar($sexo, $idade)
?>