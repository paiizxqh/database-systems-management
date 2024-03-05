<?php
   class PagesController{
    public function home(){
        require_once('views/Pages/home.php');
    }
    public function error(){
        require_once('views/Pages/error.php');
    }
   } 
?>