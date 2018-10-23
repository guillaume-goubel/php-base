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

<?php

// on déclare les variables
$emailUser = null;
$subjectUser= null;
$messageUser = null;

if (!empty($_POST)){
    $emailUSer = $_POST['emailUser'];
    $subjectUser = $_POST['subjectUser'];
    $messageUser = $_POST['messageUser'];
}

?>

<body>

    <div class="container">

        <form action="index.php" method="POST">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Votre email" name="emailUser" value="<?php echo !empty($_POST) ? $_POST['emailUser'] : null; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">//</span>
                </div>
                <input type="text" class="form-control" placeholder="Sujet du post" name="subjectUser" value="<?php echo !empty($_POST) ? $_POST['subjectUser'] : null; ?>">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Votre message</span>
                </div>
                <textarea class="form-control" placeholder="Votre message" aria-label="With textarea" name="messageUser" value="<?php echo !empty($_POST) ? $_POST['messageUser'] : null; ?>"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>

        </form>

    </div>

    <?php

    // Vérification du formulaire
    if (!empty($_POST)){

    // Vérification des mails
    if (empty($emailUser)){
        echo('<br>');
        echo("<div class='alert alert-danger' role='alert'> Le mail est obligatoire ! </div> ");
    } 

    if (false == filter_var($_POST['emailUser'], FILTER_VALIDATE_EMAIL)) {
        echo('<br>');
        echo("<div class='alert alert-danger' role='alert'> L'email n'est pas valide! </div> ");
    }

    // Vérification du sujet
    if (empty($_POST['subjectUser'])){
        echo('<br>');
        echo("<div class='alert alert-danger' role='alert'> Le sujet n'est pas valide ! </div> ");
    } 

    // Vérification du message
    if (empty($_POST['messageUser'])){
        echo('<br>');
        echo("<div class='alert alert-danger' role='alert'> Merci de rentrer un message valide ! </div> ");
    } 

    if (strlen($_POST['messageUser']) < 15 ) {
        echo('<br>');
        echo("<div class='alert alert-danger' role='alert'> Merci de rentrer un message de plus de 15 caractères ! </div> ");
    } 
 
    else {
        echo "<div class='alert alert-success' role='alert'> Votre message est envoyé ! </div></div> ";
    }

} 

    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>