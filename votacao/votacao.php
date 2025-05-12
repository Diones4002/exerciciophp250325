<?php 
include("cabecalho.php");
$idade = 17;
if ($idade < 16) {
    include("votacao_menor.php");
} else if ($idade < 18) {
    include("votacao_16.php");
} else {
    include("votacao_maior.php");
}
include("rodape.php");
?>