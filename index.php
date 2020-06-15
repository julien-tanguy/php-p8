<?php 
//lancé session
    session_start();
//attribuer variables recupérablent sur toutes les pages de la session
    $_SESSION['lastname'] = 'TANGUY';
    $_SESSION['firstname'] = 'Julien';
    $_SESSION['age'] = 30;
//cookies
//time() + 365*24*3600 conservera le cookie 1 an.
//Le dernier paramètre true  permet d'activer le mode  httpOnly  sur le cookie, et donc de le rendre en quelque sorte plus sécurisé.
    if (isset($_POST['login']) && isset($_POST['password'])) {
        setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
        setcookie('password', $_POST['password'], time() + 365*24*3600, null, null, false, true);
        header("Location: http://partie8.exphp/user.php");
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
        <!--exo1-->
        <div class="serveur">
            <h1>INFORMATIONS SESSION</h1>
            <p>Votre User Agent est : <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
            <p>Votre Adresse IP est : <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
            <p>Votre serveur a le nom <?php echo $_SERVER['SERVER_NAME']; ?></p>
        </div>
        <!--exo3-->
        <div class="zoneConnect">
            <h1 class="connect">Connexion</h1>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <li><label for="login"></label>
                    <input type="text" name="login" id="login" placeholder="pseudo *">
                </li>
                <li><label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="mot de passe :">
                </li>
                <li><input type="submit" id="button" /></li>
            </form>
        </div>
        <a href="user.php">lien vers user.php</a>
    </body>
</html>