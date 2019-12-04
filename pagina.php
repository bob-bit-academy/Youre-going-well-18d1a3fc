<?php
echo "Welke operatie wil je uitvoeren? (+, -, %) \n";
$keuze = readline();
if ($keuze == "+" || $keuze == "-" || $keuze == "%"){
    echo "Eerste getal?\n";
$eerste_getal = readline();
if (is_numeric($eerste_getal)){
echo "Tweede getal?\n";
$tweede_getal = readline();
if(is_numeric($tweede_getal)){
    
}
else {
    echo " '$tweede_getal' is geen getal" . PHP_EOL;
    exit();
}
if ($keuze == "%"){
    $uitkomst = $eerste_getal % $tweede_getal;
    echo("Uw resultaat is: " . $uitkomst);
}
if ($keuze == "-"){
    $uitkomst = $eerste_getal - $tweede_getal;
    echo("Uw resultaat is: " . $uitkomst);
}
if ($keuze == "+"){
    $uitkomst = $eerste_getal + $tweede_getal;
    echo("Uw resultaat is: " . $uitkomst);
}
}
}
    
else {
    echo "Dit is geen geldeg oparatie"; exit();
}
