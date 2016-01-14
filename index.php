<?php
session_start();

if((isset($_SESSION['zalogowany'] )) && ($_SESSION['zalogowany'] == true ))
{

header('Location: app/zalogowany.php');
	exit();	


}


?>



<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
<title>Strona</title>
	
<meta name="description" content="Opis w Google" />
<meta name="keywords" content="słowa, kluczowe, wypisane, po, porzecinku" />


<link rel="Stylesheet" type="text/css" href="style.css" />

<link href='https://fonts.googleapis.com/css?family=Coda:400,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body>

<div id="calosc">

<div id="logo"><center>Tu Bedzie log</center></div>

<div id="panel_gorny">
<div id="wyrownywacz" ><center>
<div class="przycisk_gora">Menu</div>
<div class="przycisk_gora">O Projekcie</div>
<div class="przycisk_gora">O Autorze</div>
<div class="przycisk_gora">Spis Treści</div>
<div class="przycisk_gora">MAGIA</div>
</center>
</div>
<div style="clear:both;"> </div>

</div>

<div id="panel_boczny">

<div class="przycisk_bok"> <center> Menu </center> </div>
<div class="przycisk_bok"> <center> O Projekcie </center>  </div>
<div class="przycisk_bok"> <center> O Autorze </center>  </div>
<div class="przycisk_bok"> <center> Spis Treści </center>  </div>
<div class="przycisk_bok"> <center> MAGIA </center>  </div>

</div>

<div id="zawartosc">

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sagittis magna. Pellentesque aliquam nulla vitae orci lobortis, eget convallis sapien fringilla. In aliquam sollicitudin ipsum vitae condimentum. Curabitur interdum, arcu sed pretium sagittis, magna odio porta sem, ac egestas leo est eu est. Nulla luctus faucibus sapien, ac commodo nulla tempor nec. Vestibulum odio magna, mattis euismod tincidunt in, accumsan quis dui. Praesent malesuada, nisi a dignissim vestibulum, mauris orci egestas dui, nec cursus ex nunc vitae leo. Donec tempus feugiat feugiat. Sed vulputate commodo tincidunt. Nam iaculis massa accumsan justo laoreet, vitae maximus ipsum bibendum. Duis ullamcorper pellentesque erat vitae blandit. Nullam ac tempus metus. Aliquam sagittis at orci et fringilla.
<br/><br/>
Quisque eu lacus a elit interdum congue. Pellentesque vitae facilisis purus. Nam sed tincidunt mauris, ut dictum nibh. Ut ut neque vel quam imperdiet ultricies. Sed elementum diam in nunc malesuada rutrum at bibendum lorem. Ut quis nisl eget mauris consequat mollis et ut ante. Curabitur mollis nisl tincidunt eros fringilla, ut mollis libero dignissim. Duis sem nunc, rhoncus quis ultrices in, fringilla sit amet elit. Nam vitae interdum nibh, nec eleifend ex. Aenean a sodales elit, non varius turpis. Aliquam ac nisi a diam euismod euismod. Maecenas rhoncus imperdiet nulla at ullamcorper. Integer suscipit egestas nisl. Nam ut venenatis lacus. Duis molestie lobortis elementum.
<br/><br/>
In bibendum porta nisi ut condimentum. Maecenas sit amet dolor ante. In commodo lobortis eros, a hendrerit eros efficitur at. Proin cursus aliquam massa, ut ultrices arcu accumsan non. Duis lobortis ultrices nisi molestie convallis. Quisque rhoncus ut nisl et venenatis. Sed finibus semper venenatis. Fusce ac mauris vitae enim efficitur imperdiet. Nullam et erat pharetra quam tempor pharetra quis sed ipsum. Ut vel ultricies nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec convallis massa ut molestie sollicitudin. Duis ac fermentum nulla, eu auctor ante. Morbi laoreet aliquam neque, nec bibendum nisl. Morbi porttitor aliquam odio nec egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
<br/><br/>

</div>

<div id="logowanie">

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

</div>


<center>
<?php
	if(isset($_SESSION['error'])) echo  '<span style="color:red; font-size: 20px;">'.$_SESSION['error'].'</span>';
?>
</center>

<div style="clear:both;"> </div>

<div id="stopka" >Stona poświęcona ...... Wszelkie prawa zastrzeżone &copy; </div>

</div>

</body>
</html>