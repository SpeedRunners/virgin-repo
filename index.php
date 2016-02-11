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
<head >

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
<title>Strona</title>
	
<meta name="description" content="Opis w Google" />
<meta name="keywords" content="słowa, kluczowe, wypisane, po, porzecinku" />


<link rel="Stylesheet" type="text/css" href="style.css" />

<link href='https://fonts.googleapis.com/css?family=Inconsolata&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="script/jquery-1.12.0.min.js" ></script>
</head>

<body>

<div id ="calosc">
<div id = "tlo" >

</div>

<div id="logowanie">
<a href="app/register.php">Nowe konto</a>
<form action="app/logowanie.php" method="post">

<center>Login:

<input type="text" name="login">
<br/>

Hasło:

<input type="password" name="haslo">
<br/>

<input type="submit" value="Zaloguj">

</center>
</form>
<?php
	if(isset($_SESSION['error'])) echo  '<span style="color:red; font-size: 20px;"><center>'.$_SESSION['error'].'</center></span>';
?>
<div style ="clear:both;">
</div>
</div>

<script src="script/typer.js"></script>
</body>
</html>