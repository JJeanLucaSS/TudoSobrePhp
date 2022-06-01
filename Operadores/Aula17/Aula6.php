<?php

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;

$b = 8;

echo "<br>";

echo $a ?? $b ?? $c;




?>