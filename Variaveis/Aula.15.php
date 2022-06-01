<?php

$nome = (int) $_GET["a"]; //converter para int $variavel = (int) $_GET...
//var_dump($nome);

$ip = $_SERVER['SCRIPT_NAME']; //ip= REMOTE_ADDR
echo $ip;

//url= /variaveis/Aula.15.php ? a=123 &b=456

?>