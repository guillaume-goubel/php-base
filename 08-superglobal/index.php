<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="ecran"></div>

    <div class="saisie">
        <form action="index.php" method="GET">

            <input type="text" name="nombre1" value="<?php echo !empty($_GET) ? $_GET['nombre1'] : null; ?>"> Nombre1
            <br>

            <input type="text" name="nombre2" value="<?php echo !empty($_GET) ? $_GET['nombre2'] : null; ?>"> Nombre2
            <br>

            <select name="signes">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <button type="submit" class="btn btn-outline-primary">Calculer</button>
        </form>


        <?php

        $arr_errors = [];

        if ( !isset($_GET['nombre1']) || !isset($_GET['nombre2']) ){

            exit("<div class='alert alert-danger' role='alert'> 'Hey ! merci de rentrer un choix pour chaque formulaire !' </div> ");

            array_push($arr_errors , "Hey ! merci de rentrer un choix pour chaque formulaire !");
            var_dump($arr_errors); 
        } 
        
        else if ( !is_numeric($_GET['nombre1']) || !is_numeric($_GET['nombre2']) ){

            echo "<div class='alert alert-danger' role='alert'> 'Hey ! merci de rentrer un chiffre pour chaque formulaire !' </div> ";
        } 

/* 
        else if ($_GET['nombre1'] || $_GET['nombre2'] === 0 ){

            echo "<div class='alert alert-danger' role='alert'> 'Hey ! merci de ne pas choisir un zéro !' </div> ";
        }  */
        
        else {

        $nb1 = $_GET['nombre1'];
        $nb2 = $_GET['nombre2'];
        $signes = $_GET['signes'];

        switch ($signes) {
        case '+':
        $resultat = $nb1 + $nb2;
        break;

        case '-':
        $resultat = $nb1 - $nb2;
        break;

        case '*':
        $resultat = $nb1 * $nb2;
        break;

        case '/':
        $resultat = $nb1 / $nb2;
        break;
    }

        echo "<div class='alert alert-success' role='alert'>" . $resultat . "</div> ";
        

        }




    ?>
    </div>

</body>

</html>