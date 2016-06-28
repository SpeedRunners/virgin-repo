<?php
require_once 'config.php';
$loader = include DIR_VENDOR.'autoload.php';
require_once 'config-router.php';
$router = new \App\Engine\Router\Router('http://'.$_SERVER["SERVER_NAME"].':8080'.$_SERVER["REQUEST_URI"]);
//var_dump('http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);
$router->run();
$file=$router->getFile();
$classController=$router->getClass();
$method=$router->getMethod();
require_once($file);
$obj = new $classController();
$obj->$method();


//-----------DEBUG--------------
if(DEBUG_MODE){
echo "<hr><center>";
echo "DEBUG MODE" . "<br/>"; 
echo "Plik: " . $router->getFile() . "<br/>
Klasa: " . $router->getClass() . "<br/>
Metoda: " . $router->getMethod();
 
echo"<br/>Tablica GET<br/>";
var_dump($_GET);
echo "<br/>Tablica POST<br/>";
var_dump($_POST);

}