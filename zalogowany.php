<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>

<!DOCTYPE html>
<html>
<head >

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
<title>Strona</title>
	
<meta name="description" content="Opis w Google" />
<meta name="keywords" content="s�owa, kluczowe, wypisane, po, porzecinku" />


<link rel="Stylesheet" type="text/css" href="style.css" />
<link href='https://fonts.googleapis.com/css?family=Coda:400,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>

<a href = "wyloguj.php"><h1> WYLOGUJ SIE</h1> </a>
</body>

</head>