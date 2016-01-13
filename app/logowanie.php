<?php
session_start();

	if((!isset($_POST['login'] )) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}	
	
	require_once "app/connect.php";
	
	$baza = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($baza->connect_errno!=0)
	{
		echo "Error: ".$baza->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$baza->query(
		sprintf("SELECT * FROM logowanie WHERE login='%s' AND haslo='%s'",
		mysqli_real_escape_string($baza,$login),
		mysqli_real_escape_string($baza,$haslo))))
		{
			$ilu_us = $rezultat-> num_rows;
			
			if($ilu_us > 0)
			{
				
				$_SESSION['zalogowany'] = true;
				unset($_SESSION['error']);
				header('Location: app/zalogowany.php');
				
			}
			else
			{
				$_SESSION['error'] = "Błędne dane logowania!!!";
				header('Location: index.php');
			}
		}
		$baza -> close();
	}
	
?>