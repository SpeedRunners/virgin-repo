<?php
$collection = new \App\Engine\Router\RouteCollection();

/*
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
));*/

$collection->add('rejestracja', new \App\Engine\Router\Route(
 HTTP_SERVER.'rejestracja',
    array(
        'file' => DIR_CONTROLLER.'Home.php',
        'method' => 'rejestracja',
        'class' => '\App\Controller\Home'
    )
));

$collection->add('logowanie', new \App\Engine\Router\Route(
 HTTP_SERVER.'logowanie',
    array(
        'file' => DIR_CONTROLLER.'Home.php',
        'method' => 'logowanie',
        'class' => '\App\Controller\Home'
    )
));

$collection->add('log', new \App\Engine\Router\Route(
 HTTP_SERVER.'log',
    array(
        'file' => DIR_CONTROLLER.'Home.php',
        'method' => 'log',
        'class' => '\App\Controller\Home'
    )
));

$collection->add('home', new \App\Engine\Router\Route(
    HTTP_SERVER.'',
    array(
        'file' => DIR_CONTROLLER.'Home.php',
        'method' => 'home',
        'class' => '\App\Controller\Home'
    )
));



$router = new \App\Engine\Router\Router($_SERVER['REQUEST_URI'], $collection);
