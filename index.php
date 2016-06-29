<?php
session_start();

require_once 'config.php';
$loader = include DIR_VENDOR.'autoload.php';
require_once 'config-router.php';

$addres = 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"] .$_SERVER["REQUEST_URI"];

$router = new \App\Engine\Router\Router('http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"] .$_SERVER["REQUEST_URI"]);

$router->run();
$file=$router->getFile();
$classController=$router->getClass();
$method=$router->getMethod();
require_once($file);
$obj = new $classController();
$obj->$method();

//-----------DEBUG--------------
if(DEBUG_MODE){
echo "<hr><center><pre>";
echo "DEBUG MODE" . "<br/>"; 
echo "Plik: " . $router->getFile() . "<br/>
Klasa: " . $router->getClass() . "<br/>
Metoda: " . $router->getMethod();
 
echo"<br/>Tablica GET<br/>";
var_dump($_GET);
echo "<br/>Tablica POST<br/>";
var_dump($_POST);
echo '<br/>';
echo $addres;
}
