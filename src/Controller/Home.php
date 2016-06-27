<?php
namespace App\Controller;



class Home extends \App\Engine\Controller
{

    public function index(){
        $view = new \App\View\Home();
        $view-> wynik = 'index';
        $view->renderHTML('home', 'front/home/'); 
        
    }   
    
    public function test(){
        $model = new \App\Model\Home();
        $wynik = $model -> test($_GET['id']);
        echo $_GET['id2'];
        $view = new \App\View\Home();
        $view-> wynik = $wynik;
        $view->renderHTML('home', 'front/home/'); 
    }
    public function test2(){
        
        echo $_GET['id'];
    }
}