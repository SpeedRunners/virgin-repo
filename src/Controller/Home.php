<?php
namespace App\Controller;



class Home extends \App\Engine\Controller
{

    public function home(){
            
        $view = new \App\View\Home();
        $view->renderHTML('home', 'front/home/'); 
        
    }
    
    public function rejestracja(){
        
        $view = new \App\View\Home();
        $view->renderHTML('rejestracja', 'front/home/'); 
    }
    
    public function logowanie(){
        $view = new \App\View\Home();
        $view->renderHTML('logowanie', 'front/home/'); 
    }
    /*
    public function test(){
        $model = new \App\Model\Home();
        $wynik = $model -> test($_GET['id']);
        echo $_GET['id2'];
        $view = new \App\View\Home();
        $view-> wynik = $wynik;
        $view->renderHTML('home', 'front/home/'); 
    }
  */
}