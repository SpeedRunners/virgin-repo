<?php
session_start();

if((isset($_SESSION['zalogowany'] )) && ($_SESSION['zalogowany'] == true ))
{

header('Location: app/zalogowany.php');
	exit();	


}


?>



    <!DOCTYPE html>
    <html lang="pl">

    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Strona</title>

        <meta name="description" content="Opis w Google" />
        <meta name="keywords" content="słowa, kluczowe, wypisane, po, porzecinku" />


        <link rel="Stylesheet" type="text/css" href="style.css" />

        <link href='https://fonts.googleapis.com/css?family=Inconsolata&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="script/jquery-1.12.0.min.js"></script>
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="img/favicons/manifest.json">
        <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
    </head>

    <body>

        <div id="calosc">
            <div id="tlo">

            </div>

            <div id="logowanie">
                <a href="app/register.php">Nowe konto</a>
                <form action="app/logowanie.php" method="post">

                    <center>Login:

                        <input type="text" name="login">
                        <br/> Hasło:

                        <input type="password" name="haslo">
                        <br/>

                        <input type="submit" value="Zaloguj">

                    </center>
                </form>
                <?php
	if(isset($_SESSION['error'])) echo  '<span style="color:red; font-size: 20px;"><center>'.$_SESSION['error'].'</center></span>';
?>
                    <div style="clear:both;">
                    </div>
            </div>

            <script src="script/typer.js"></script>
    </body>

    </html>