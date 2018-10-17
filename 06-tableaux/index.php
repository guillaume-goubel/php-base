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
            'notes' => [10, 8, 16, 16, 17, 16, 19, 2]
        ],
        1 => [
            'nom' => 'Thomas',
            'notes' => [4, 18, 12, 20, 13, 7]
        ],
        2 => [
            'nom' => 'Jean',
            'notes' => [17, 14, 16, 18, 9]
        ],
        3 => [
            'nom' => 'Enzo',
            'notes' => [1, 14, 12, 2, 1, 8, 9]
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
echo '<h2> 1.AFFICHER LES NOTES </h2> ';
 
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


}

    // LA MOYENNE DE JEAN
    echo '<h2> 2.LA MOYENNE DE JEAN </h2> ';


    $notesCount = count($eleves[2]['notes']) ; 


    $somme = 0;

    foreach ($eleves[2]['notes'] as $key => $value2) {

        $somme += $eleves[2]['notes'][$key];
        
    }

    echo($somme) .('<br>'); 
    echo round(($somme) / $notesCount,2); // la moyenne arrondie avec des fonctions


    echo ('<br>');
    echo (array_sum($eleves[2]['notes']) / count($eleves[2]['notes'])); // la moyenne avec des fonctions

    


    
    //QUI A LA MOYENNE ?
    echo '<h2> 3.QUI A LA MOYENNE </h2> ';
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
    echo '<h2> 4.QUI A LA MEILLEURE NOTE </h2> ';
    
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
                echo $eleve['nom'] .' a eu la meilleure note qui est ' . $bestnote;
                break; // on arrete la boucle
            }
        
        }
    }


        // QUELQU'UN A EU 20 ?
        echo '<h2> 5.QUI A EU 20 ? </h2> ';

        $vingt = false;

        foreach ($eleves as $eleve){
            if ($eleve['nom'] === 'Thomas'){
                continue; // Si l'élève s'appel Thomas , on continue
            }

            foreach ($eleve['notes'] as $note) {
                
                if ($note ===  20){
                    $vingt = true;
                    break 2;
                    var_dump('ici');           
               }
            }
            //break
            var_dump('là');   
        }

        if ($vingt){
            echo "Quelqu'un a eu 20";
        } else {
            echo "Personne n'a eu 20 , bande de nazes !";
        }

    























 

    ?>


</body>
</html>

























