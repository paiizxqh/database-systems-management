<?php
    class MinistryController{
        public function index(){
            $ministryList = Ministry::getAll();
            require_once('views/Ministry/index_ministry.php');
        }
    }
?>