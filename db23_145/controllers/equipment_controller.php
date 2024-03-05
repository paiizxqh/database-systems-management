<?php
   class EquipmentController{
      public function index(){
         $equipmentList = Equipment::getAll();
         require_once('views/Equipment/index_equipment.php');
      }
      public function search(){
         $key = $_GET['key'];
         $equipmentList = Equipment::search($key);
         require_once('views/Equipment/index_equipment.php');
      }
      public function newEquipment(){
         $equipmentList = Equipment::getAll();
         require_once('views/Equipment/new_equipment.php');
      }
      public function addEquipment(){
         $e_id = $_GET['equipment_id'];
         $e_name = $_GET['equipment_name'];
         Equipment::add($e_id,$e_name);
         EquipmentController::index();
      }
      public function updateForm(){
         $e_id = $_GET['equipment_id'];
         $equipment = Equipment::get($e_id);
         $equipmentList = Equipment::getAll();
         require_once('views/Equipment/updateForm_equipment.php');
      }
      public function update(){
         $e_id = $_GET['equipment_id'];
         $e_name = $_GET['equipment_name'];
         Equipment::update($e_id,$e_name);
         EquipmentController::index();
      }
      public function deleteConfirm(){
         $e_id = $_GET['equipment_id'];
         $equipment = Equipment::get($e_id);
         require_once('views/Equipment/deleteConfirm_equipment.php');
      }
      public function delete(){
         $e_id = $_GET['equipment_id'];
         Equipment::delete($e_id);
         EquipmentController::index();
      }
   } 
?>