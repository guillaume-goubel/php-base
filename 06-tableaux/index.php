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

    $eleves = [
        0 => [
            'nom' => 'Matthieu',
            'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
        ],
        1 => [
            'nom' => 'Thomas',
            'notes' => [4, 18, 12, 15, 13, 7]
        ],
        2 => [
            'nom' => 'Jean',
            'notes' => [17, 14, 6, 2, 16, 18, 9]
        ],
        3 => [
            'nom' => 'Enzo',
            'notes' => [1, 14, 6, 2, 1, 8, 9]
        ]
    ];


/*     var_dump($eleves[0]['notes']); */
/*     
    foreach ($eleves as $key1 => $value1) {

        echo "L'èlève" .$value1['nom'] .' a eu comme notes :' .'<br>' ;

        foreach ($notes as $key2 => $note) {

            var_dump($notes);     
        }
    }
 */
/* echo $eleves[2]['nom']; // afiche Hamed
echo $eleves[2]['notes'][2]; // afiche la note 5 de Hamed
echo '<br>';
echo '<br>'; */


// AFFICHER LES NOTES
 
 foreach ($eleves as $key1 => $value1) {
    
    echo 'Les notes de ' .$value1['nom'] .' sont :' .'<br>';

    $notesCount = count($value1['notes']); 

    foreach ($value1['notes'] as $key => $value2) {

        echo $value2;

        // si la note est la derniere
        if ($key === $notesCount - 1 ){
            echo '. ';
        }
        
        // si la note est l'avant derniere
        else if ($key ===  $notesCount - 2 ){
            echo ' et ';
        }

        // si la note est autre part 
        else {
            echo ', ';
        }
    }

    echo ('<br>');

}

    // LA MOYENNE DE JEAN
    $notesCount = count($eleves[2]['notes']) ; 
    echo ('<br>');

    $somme = 0;

    foreach ($eleves[2]['notes'] as $key => $value2) {

        $somme += $eleves[2]['notes'][$key];
        
    }

    echo($somme) .('<br>'); 
    echo round(($somme) / $notesCount,2); // la moyenne arrondie avec des fonctions


    echo ('<br>');
    echo (array_sum($eleves[2]['notes']) / count($eleves[2]['notes'])); // la moyenne avec des fonctions

    
    echo ('<br>');


    
    //QUI A LA MOYENNE ?
    $countAverage = 0;
    foreach ($eleves as $eleve) {

        $average = array_sum($eleve['notes']) / count($eleve['notes']);
        
        echo $eleve['nom'];

        if ($average >= 10){
            echo ' a la moyenne' .'<br>';
            $countAverage ++;
        } else{
            echo ' a pas la moyenne ' .'<br>';
        }
    }

    echo 'il y a ' .$countAverage .'élèves qui ont la moyenne';



    // LA MEILLEURE NOTE
    $bestnote = 0;

    foreach ($eleves as $eleve) {
        foreach ($eleve['notes'] as $note) {

            if ($note >  $bestnote){

                $bestnote = $note;
            }
        
        }
    }


    echo ('<br>');

    foreach ($eleves as $eleve) {
        foreach ($eleve['notes'] as $note) {

            if ($note ===  $bestnote){

                echo $eleve['nom'] .'a eu la meilleur note qui est ' . $bestnote;
            }
        
        }
    }


















 

    ?>


</body>
</html>

























