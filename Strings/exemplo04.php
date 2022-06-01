<?php


$frase = "A Repetição e a Mãe da Retenção";
$palavra = "Mãe";
$q = strpos($frase, $palavra);
$texto = substr($frase,0,$q);
$texto1 = substr($frase,$q + strlen($palavra), strlen($frase) );

var_dump($texto1   );
echo "<br>";
var_dump($texto);









?>