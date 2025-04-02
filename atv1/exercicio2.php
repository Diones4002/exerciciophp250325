<?php
$numero = 31;
if ($numero % 10 == 0) {
    echo "seu número é divisivel por 10 </br>";
} 

if ($numero % 5 == 0){
    echo "seu número é divisivel por 5 </br>";
}

if($numero % 2 == 0){
    echo "seu número é divisivel por 2 </br>";
}

if ($numero % 2 !== 0 && $numero % 5 !== 0 && $numero % 10 !== 0) {
    echo "seu número não é divisível por nenhum destes";
}

?>