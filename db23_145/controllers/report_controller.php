<?php
   class ReportController{
      public function index(){
         $reportList = Report::getAll();
         require_once('views/Report/index_report.php');
      }
      public function search(){
         $key = $_GET['key'];
         $reportList = Report::search($key);
         require_once('views/Report/index_report.php');
      }
      public function newReport(){
         $reportList = Report::getAll();
         $equipmentList = Equipment::getAll();
         $agencyList = Agency::getAll();
         require_once('views/Report/new_report.php');
      }
      public function addReport(){
         $a_id = $_GET['agency_id'];
         $e_id = $_GET['equipment_id'];
         $s_active = $_GET['active_amount'];
         $s_inactive = $_GET['inactive_amount'];
         $s_already = $_GET['already_amount'];
         Report::add($a_id,$e_id,$s_active,$s_inactive,$s_already);
         ReportController::index();
      }
      public function updateForm(){
         $l_id = $_GET['list_id'];
         $report = Report::get($l_id);
         $reportList = Report::getAll();
         $agencyList = Agency::getAll();
         $equipmentList = Equipment::getAll();
         require_once('views/Report/updateForm_report.php');
      }
      public function update(){
         $l_id = $_GET['list_id'];
         $a_id = $_GET['agency_id'];
         $e_id = $_GET['equipment_id'];
         $s_active = $_GET['active_amount'];
         $s_inactive = $_GET['inactive_amount'];
         $s_already = $_GET['already_amount'];
         Report::update($l_id,$a_id,$e_id,$s_active,$s_inactive,$s_already);
         ReportController::index();
      }
      public function deleteConfirm(){
         $l_id = $_GET['list_id'];
         $report = Report::get($l_id);
         require_once('views/Report/deleteConfirm_report.php');
      }
      public function delete(){
         $l_id = $_GET['list_id'];
         Report::delete($l_id);
         ReportController::index();
      }
   } 
?>