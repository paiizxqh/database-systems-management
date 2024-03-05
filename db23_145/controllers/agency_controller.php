<?php
   class AgencyController{
      public function index(){
         $agencyList = Agency::getAll();
         require_once('views/Agency/index_agency.php');
      }
      public function search(){
         $key = $_GET['key'];
         $agencyList = Agency::search($key);
         require_once('views/Agency/index_agency.php');
      }
   } 
?>