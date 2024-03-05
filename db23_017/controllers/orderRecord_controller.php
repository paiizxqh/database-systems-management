<?php
class OrderRecordController
{
    public function index()
    {
        $orderRecordList = OrderRecord::getAll();
        require_once('views/orderRecord/index_orderRecord.php');
    }
    public function newOrderRecord(){
        $colorsList = Colors::getAll();
        require_once('views/orderRecord/add_orderRecord.php');

    }
    public function addOrderRecord(){
        $colorid = $_GET['cid'];
        $date = $_GET['dateorder'];
        $quantity = $_GET['quantity'];
        OrderRecord::add($colorid,$date,$quantity);
        OrderRecordController::index();
    }

    public function updateForm(){
        $id = $_GET['OrderRecordID'];
        echo " 22 $id ";
        $orderRecordList = OrderRecord::get($id);
        $colorsList = Colors::getAll();
        require_once('views/orderRecord/updateForm.php');
    }

    public function update(){
        echo " go up ";
        $id = $_GET['OrderRecordID'];
        $colorid = $_GET['cid'];
        $date = $_GET['dateorder'];
        $quantity = $_GET['quantity'];
        OrderRecord::update($id,$colorid,$date,$quantity);
        OrderRecordController::index();
    }
}
?>