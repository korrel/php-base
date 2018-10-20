<?php

$mot = "World of Warcraft";

$array_mot = explode( ' ', $mot);
// echo $array_mot[0];
// echo $array_mot[1];
// echo $array_mot[2];

foreach($array_mot as $valeur){
    $lettre = substr($valeur, 0, 1);
    echo strtoupper($lettre);
}

/////////////////////////////////////////////////////////////////////////////


function conjugaison($monVerbe) {

    $pronom = ['Je','Tu','Il/elle/on','Nous','Vous','Ils'];
    $terminaison = ['e','es','e','ons','ez','ent'];

    for ($i = 0; $i < 6 ; $i++){
        // je renverse / je supprime / je renverse
        // $mirroir = strrev($monVerbe);
        // $supprime= substr($mirroir, 2);
        // $syntaxe = strrev($supprime);

        // Je me posissionne au début et je retire les 2 dernières lettres
        $syntaxe = substr($monVerbe, 0, -2);

        // j'affiche la terminaison
        $end = $terminaison[$i];

        // j'affiche le pronom
        $start = $pronom[$i];

        // je combine les deux 
        echo '<br>'.$start.' '.$syntaxe.$end;
    }
}

conjugaison('pendiculer');

/////////////////////////////////////////////////////////////////////////////

$subjects= [
    'Je' => 'e',
    'Tu' => 'es',
    'Il / Elle / On' => 'e',
    'Nous' => 'ons',
    'Vous' => 'ez',
    'Ils / Elles ' => 'ent',
];


unset($subjects['Je']);
var_dump($subjects);

$change = [
    'J\'' => 'e',
];

$Newsubjects = array_replace($change, $subjects);
var_dump ($Newsubjects);


?>