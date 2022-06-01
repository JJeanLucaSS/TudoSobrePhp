<?php
$QualASuaIdade = 30;
$IdadeCrianca = 12;
$IdadeMaior = 18;
$IdadeMelhor = 65;

if ($QualASuaIdade < $IdadeCrianca){

    echo "Criança";

} elseif ($QualASuaIdade < $IdadeMaior) {
    echo "Adolecente";

} elseif ($QualASuaIdade < $IdadeMaior) {
    echo "Adulto";

} else{
    echo "Idoso";
}
echo "<br>";
 echo ($QualASuaIdade < $IdadeMaior)?"Menor de Idade ":"Maior de Idade";


?>