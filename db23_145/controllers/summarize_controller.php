<?php
   class SummarizeController{
      public function index(){
         $summarizeList = Summarize::getAll();
         require_once('views/Summarize/index_summarize.php');
      }
      public function search(){
        $key = $_GET['key'];
        $summarizeList = Summarize::search($key);
        require_once('views/Summarize/index_summarize.php');
     }
   } 
?>