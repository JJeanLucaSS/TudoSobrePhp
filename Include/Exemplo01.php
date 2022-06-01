<?php

//include "inc/exemplo02.php"; //exise um diretorio ja existente, tenta executar o arquivo mesmo com erro 
require_once "inc/exemplo02.php"; //requer obriga o arquivo a existir senao ERRO FATAL /.. volta arquivo

$resultado = somar(10, 20);

echo $resultado;





?>