<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

echo "<h2> 1. Fonctions sur les chaines </h2>";

function acronyme($string){

    $stringM = strtoupper($string);
    $keywords = $string;
    $array_keywords = explode(' ', $keywords);
    
    foreach ($array_keywords as $key => $value) {
        echo $value[0] ; 
    }
}

acronyme('world of warcraft');


echo "<h2> 2. Conjugaison - chercher </h2>";
function conjuguer($string){

    $sujets =  ["je", "tu", "il", "nous", "vous", "ils"];
    $present = ["e","es","e","ons","ez","ent"];

    $stringEr = str_replace('chercher', 'cherch', $string);

    foreach ($sujets as $key => $value1) {
        echo $value1 ." " .$stringEr .$present[$key] ."<br>";  
    }
}

conjuguer('chercher');



echo "<h2> 2. Conjugaison - chercher - version2 </h2>";
function conjuguer2($string){

    $stringEr = str_replace('oublier', 'oubli', $string);
    $voyels = ["a" , "e" , "i", "o" , "u" ,"y"];

    $sujets =  [
        'Je' => 'e',
        "J'" => 'e',
        'Tu' => 'es',
        'Il / Elle / On' => 'e',
        'Nous' => 'ons',
        'Vous' => 'ez',
        'Ils / Elles' => 'ent'
    ];

    if (in_array(substr($string,0,1) ,$voyels)){
        unset($sujets["Je"]);

    } else{
        unset($sujets["J'"]);
    }

    var_dump($sujets);
    
    $output ='';

    foreach ($sujets as $sujet => $ending) {
        
        $output = $sujet .' ' .$stringEr .$ending ."<br>";
        echo $output;
    }
}

conjuguer2('oublier');

?>


</body>
</html>