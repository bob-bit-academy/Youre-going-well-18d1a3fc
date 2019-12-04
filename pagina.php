<?php
echo "> hoeveel vrienden zal ik vragen om hun droom". PHP_EOL;
$aantalvrienden = readline("> ");
$informatie = array(
);
    if (is_numeric($aantalvrienden)) {
        for ($tell = 1; $tell <= $aantalvrienden; $tell++) 
        { 
        echo "> Wat is je naam?" . PHP_EOL;
        $naam = readline("> ");
        
        echo "> Hoeveel dromen heb je?" . PHP_EOL;
        $aantaldromen = readline("> ");
            $bruh = array();
        for ($tell2 = 1; $tell2 <= $aantaldromen; $tell2++){
            echo "> wat is je droom man neef broer" . PHP_EOL;
            $dromen = Readline("> ");
           $bruh[] = $dromen;
        }
            $informatie[$naam] = $bruh;
    } 
}
else
{
    exit("> '" . $aantalvrienden . "' is niet een nummer.");
}
foreach($informatie as $naam => $array){
    foreach($array as $array => $inhoud){
    echo "> de droom van $naam is: $inhoud" . PHP_EOL;    
    }
}    
exit;
