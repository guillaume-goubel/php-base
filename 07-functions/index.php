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



    echo "<h2> 1.Créer une fonction calculant le carré d'un nombre </h2>";
    function calculCarre($cote)
    {
        $calculCarre = $cote * $cote;
        return $calculCarre;
    }
    echo(calculCarre(10));





    
    echo "<h2> 2.Créer une fonction calculant l'aire d'un rectangle et une fonction pour celle d'un cercle</h2>";
    function calculRectangle($L , $l)
    {
        $calculRectangle= $L* $l;
        return $calculRectangle;
    }

    echo(calculRectangle(10,5));

    echo('<br>');
   
    function calculCercle($rayon)
    {
        $calculCercle= pi() * ($rayon*$rayon);
        return $calculCercle;

        return calculCarre($rayon) * M_PI; // on utilise la fonction calculCarre qui calcul deja 

    }
    echo(calculCercle(10));





    echo "<h2> 3.Créer une fonction calculant le prix TTC d'un prix HT </h2>";
    function calculTva($prixHt , $tva){

        $prixTtc =  $prixHt * (1 + $tva);  ;
        return $prixTtc;
    }
    echo(calculTva(100,0.2));






    echo "<h2> 4.Créer une fonction calculant le prix TTC d'un prix HT et inversement </h2>";
    function converse($choice, $prix, $tva){

        if ($choice === 1){
            $prixHt = $prix / (1 + $tva);  
            return round($prixHt, 2);
        }


        elseif ($choice === 2){
            $prixTtc = $prix * (1 + $tva);  
            return round($prixTtc, 2) ;
        }
    }

    echo(converse(1,100,0.2));


    echo "<h2> 4.Créer une fonction calculant le prix TTC d'un prix HT et inversement - version corrigée </h2>";

    function converse2($prix, $tva, $withTaxe = true){

        if ($withTaxe){
            return $prix * (1 + $tva);  
        }

        return $prix / (1 + $tva);  
    }

    echo(converse2(10,20)); // 10 euros HT -> 12 euros TTC
    echo ('<br>');
    
    echo(converse2(10,0,false)); // 10 euros TTC -> 8,33 euros HT
    echo ('<br>');






    ?>

</body>
</html>