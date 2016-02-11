
<!DOCTYPE html>
<?php 
	// zmienne pomocnicz
	$mindlnicka = 3;      // <- minimalna dlugosc nicka
	$maxdlnicka = 20;   // <- maksymalna dlugosc nicka
	$mindlpass = 5;      // <- minimalna dlugosc hasla
	$maxdlpass = 20;   // <- maksymalna dlugosc hasla
	
	session_start();
	
	if( isset($_POST['nick']))
	{
		$reg = true;
		$nick = $_POST['nick'];
		$email = $_POST['email'];
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		$secretkey = "6LdNBRgTAAAAAI5bKl8ZG7DvI3T33aSh7Y8FwEsd";
		
		//sprawdzanie poprawnosci danych
		
		//nick
		if( ctype_alnum($nick) == false)
		{
			$reg = false;
			$_SESSION['nick_error'] = "Nick nie może zawierać polskich znaków.";
		}
		
		if( (strlen($nick) < $mindlnicka) || (strlen($nick) > $maxdlnicka))
		{
			$reg = false;
			$_SESSION['nick_error'] = "Nick musi zawierać od ".$mindlnicka." do ".$maxdlnicka." znaków";
		}
		
		//email
		
		$emailpomoc = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if((filter_var($emailpomoc, FILTER_SANITIZE_EMAIL) == false) || ($emailpomoc != $email))
		{
			$reg = false;
			$_SESSION['email_error'] = "Podałeś błędny adres e-mail.";
		}
		
		//password
		
		if((strlen($haslo1) < $mindlpass) || (strlen($haslo2) > $maxdlpass))
		{
			$reg = false;
			$_SESSION['haslo_error'] = "Hasło musi zawierać od ".$mindlpass." do ".$maxdlpass." znaków";
		}
		
		if( $haslo1 != $haslo2)
		{
			$reg = false;
			$_SESSION['haslo_error'] = "Hasła nie są identyczne.";
		}
		
		$hasz = password_hash($haslo1, PASSWORD_DEFAULT);
	
		//checkbox
	
		if (!isset($_POST['checkbox']))
		{
			$wszystko_OK=false;
			$_SESSION['checkbox_error']="Musisz zaakceptować regulamin.";
		}		
		
	// captcha
	
	 $captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretkey.'&response='.$_POST['g-recaptcha-response']);
	 $odpcaptcha = json_decode($captcha);
	
	if ($odpcaptcha->success==false)
		{
			$reg=false;
			$_SESSION['bot_error']="Potwierdź, że jesteś człowiekiem.";
		}
	
	
	// dodawanie nowego uzytkownika
	
	require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{

				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id FROM logowanie WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$reg=false;
					$_SESSION['email_error']="Istnieje już konto przypisane do tego adresu e-mail!";
				}
				
				//Czy nick jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT id FROM logowanie WHERE nick='$nick'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$reg=false;
					$_SESSION['nick_error']="Istnieje już gracz o takim nicku! Wybierz inny.";
				}
				
				if($reg == true)
				{
					
					if ($polaczenie->query("INSERT INTO logowanie VALUES (NULL, '$email', '$hasz', '$nick', 0)"))
					{
						echo "udana rejestracja";
						exit();
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
					
				}
				$polaczenie->close();
			}
		
		}
		catch( Exception $e)
				{
				echo '<div style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</div>';
				echo '<br />Informacja developerska: '.$e;
			}
	
	
	
	}
	
	
?>
<!DOCTYPE HTML>
<html>
<head lang="pl">

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
<title>Strona</title>
	
<meta name="description" content="Opis w Google" />
<meta name="keywords" content="słowa, kluczowe, wypisane, po, porzecinku" />


<link rel="Stylesheet" type="text/css" href="../style.css" />
<link href='https://fonts.googleapis.com/css?family=Inconsolata&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>

<form method="post">
Nickname: <br/> <input type="text" name="nick" /> <br/>

<?php 
if( isset($_SESSION['nick_error']))
{
	echo '<div class = "error">'.$_SESSION['nick_error'].'</div>';
	unset($_SESSION['nick_error']);
}
?>

E-mail: <br/> <input type ="text" name="email"/> <br/>

<?php 
if( isset($_SESSION['email_error']))
{
	echo '<div class = "error">'.$_SESSION['email_error'].'</div>';
	unset($_SESSION['email_error']);
}
?>

Hasło: <br/> <input type="password" name="haslo1"/> <br/>

Powtórz hasło: <br/> <input type="password" name="haslo2"/> <br/>

<?php 
if( isset($_SESSION['haslo_error']))
{
	echo '<div class = "error">'.$_SESSION['haslo_error'].'</div>';
	unset($_SESSION['haslo_error']);
}
?>

<label>
 <input type="checkbox" name="checkbox" /> Akceptuje regulamin 
</label>

<?php 
if( isset($_SESSION['checkbox_error']))
{
	echo '<div class = "error">'.$_SESSION['checkbox_error'].'</div>';
	unset($_SESSION['checkbox_error']);
}
?>

<div class="g-recaptcha" data-sitekey="6LdNBRgTAAAAAAXI2wV6jMzf1nt4Ru9WIe5WvS2A"></div>
<br/>

<?php 
if( isset($_SESSION['bot_error']))
{
	echo '<div class = "error">'.$_SESSION['bot_error'].'</div>';
	unset($_SESSION['bot_error']);
}
?>

<input type="submit" value="Zakończ rejestracjię!!!" />

</form>

</body>

</head>