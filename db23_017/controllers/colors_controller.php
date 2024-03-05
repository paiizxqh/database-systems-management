<?php
    class ColorsController{
        public function index(){
            $colorsList = Colors::getAll();
            require_once('views/colors/index_colors.php');
        }

        public function newColors(){
            $productLists = Product::getAll();
            require_once('views/colors/new_colors.php');
        }
        public function addColors(){
            echo " add";
            $cid = $_GET['cid'];
            $pid = $_GET['pid'];
            $cname = $_GET['cname'];
            $st = $_GET['st'];
            //เรียก function addColors จาก Class: Colors ใน Model
            //เพิ่ม Colors
            Colors::add($cid,$pid,$cname,$st);
            //กลับไปหน้า Index
            ColorsController::index();
        }
        public function updateFormColors(){
            $cid = $_GET['ProductColorID'];
            $colorsList = Colors::get($cid);
            $productLists = Product::getAll();
            require_once('views/colors/updateForm_Colors.php');
        }
        public function updateColors(){
            echo "update";
            $cid = $_GET['ProductColorID'];
            $pid = $_GET['ProductID'];
            $cname = $_GET['ColorName'];
            $st = $_GET['Stock'];
            Colors::update($cid,$pid,$cname,$st);
            ColorsController::index();
        }
    }
?>