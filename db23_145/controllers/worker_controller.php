<?php
   class WorkerController{
      public function index(){
         $workerList = Worker::getAll();
         require_once('views/Worker/index_worker.php');
      }
      public function search(){
         $key = $_GET['key'];
         $workerList = Worker::search($key);
         require_once('views/Worker/index_worker.php');
      }
      public function newWorker(){
         $workerList = Worker::getAll();
         $titleList = Title::getAll();
         $positionList = Position::getAll();
         require_once('views/Worker/new_worker.php');
      }
      public function addWorker(){
         $w_id = $_GET['worker_id'];
         $t_id = $_GET['title_id'];
         $w_name = $_GET['worker_name'];
         $w_lname = $_GET['worker_lastname'];
         $p_id = $_GET['position_id'];
         Worker::add($w_id,$t_id,$w_name,$w_lname,$p_id);
         WorkerController::index();
      }
      public function updateForm(){
         $w_id = $_GET['worker_id'];
         $worker = Worker::get($w_id);
         $workerList = Worker::getAll();
         $titleList = Title::getAll();
         $positionList = Position::getAll();
         require_once('views/Worker/updateForm_worker.php');
      }
      public function update(){
         $w_id = $_GET['worker_id'];
         $t_id = $_GET['title_id'];
         $w_name = $_GET['worker_name'];
         $w_lname = $_GET['worker_lastname'];
         $p_id = $_GET['position_id'];
         Worker::update($w_id,$t_id,$w_name,$w_lname,$p_id);
         WorkerController::index();
      }
      public function deleteConfirm(){
         $w_id = $_GET['worker_id'];
         $worker = Worker::get($w_id);
         require_once('views/Worker/deleteConfirm_worker.php');
      }
      public function delete(){
         $w_id = $_GET['worker_id'];
         Worker::delete($w_id);
         WorkerController::index();
      }
   }
?>