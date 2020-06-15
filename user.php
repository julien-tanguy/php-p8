<?php 
//exo-4
    session_start();
    if (!empty($_COOKIE['login']) && !empty($_COOKIE['password'])) {
        $message = 'bonjour, votre pseudo est : ' . $_COOKIE['login'] . ' et votre mot de passe est : ' . $_COOKIE['password'] . '.';
    }else {
        $message = 'Identifiez-vous';
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link style="text/css" rel="stylesheet" href="css/style.css" />
        <title>php - patrtie 8</title>
    </head>
    <body>
    <!--exo2-->
    <div class="serveur">
        <h1>INFORMATIONS SESSION</h1>
        <p>Votre Nom est : <?php echo $_SESSION['lastname']; ?></p>
        <p>Votre Prénom est : <?php echo $_SESSION['firstname']; ?></p>
        <p>Vous avez : <?php echo $_SESSION['age']; ?> ans.</p>
    </div>
    <!--exo5 -->
    <div class="login">
        <h1>INFORMATIONS COMPTE</h1>
        <p><?= $message ?></p>
        <a href="modifsCookies.php">Modifier vos informations</a>
    </div>
    <a href='index.php'>Retour sur index.php</a>
    </body>
</html>