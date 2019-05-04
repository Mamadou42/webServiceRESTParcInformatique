<?php
namespace src\controller;
class Welcome 
{
    public function __construct()
    {
     echo "<h1>Bienvenue !</h1>";
           // return $this->view->load("user/login");
    }

      public function index(){
            return $this->view->load("user/login");
            //return $this->view->load("welcome/index");
			
        }
}

?>