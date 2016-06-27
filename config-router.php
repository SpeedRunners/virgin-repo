<?php
$collection = new \App\Engine\Router\RouteCollection();


$collection->add('test/' , new \App\Engine\Router\Route(
HTTP_SERVER.'test',
    array(
        'file' => DIR_CONTROLLER.'Home.php',
        'method' => 'test2',
        'class' => '\App\Controller\Home'
    ),
    array(
        'id' => '\d+'
    ),
    array(
        'id' => 4
    )
));

$collection->add('test' , new \App\Engine\Router\Route(
HTTP_SERVER.'test/<id>?/<id2>?',
    array(
        'file' => DIR_CONTROLLER.'Home.php',
        'method' => 'test',
        'class' => '\App\Controller\Home'
    ),
    array(
        'id' => '\w+',
        'id2' => '\w+',
        
    ),
    array(
        'id' => 0,
        'id2' => 0
    )
));

$collection->add('home', new \App\Engine\Router\Route(
    HTTP_SERVER.'',
    array(
        'file' => DIR_CONTROLLER.'Home.php',
        'method' => 'index',
        'class' => '\App\Controller\Home'
    )
));



$router = new \App\Engine\Router\Router($_SERVER['REQUEST_URI'], $collection);
