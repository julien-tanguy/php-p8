<?php 
//lancé session
    session_start();
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
        <title>modifier les cookies</title>
    </head>
    <body>
        <!--exo5-->
        <div class="zoneConnect">
            <h1 class="connect">MODIFIER VOS INFORMATIONS</h1>
            <form method="post" action="modifsCookies.php" enctype="multipart/form-data">
                <li><label for="login"></label>
                    <input type="text" name="login" id="login" placeholder="pseudo *">
                </li>
                <li><label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="mot de passe :">
                </li>
                <li><input type="submit" id="button" /></li>
            </form>
        </div>
        <a href="user.php">Retour sur la page user.</a>
    </body>
</html>