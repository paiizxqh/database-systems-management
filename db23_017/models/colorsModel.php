<?php
    class Colors{
        public $cid;
        public $pid;
        public $cname;
        public $st;

        public function __construct($cid,$pid,$cname,$st){
            $this->cid = $cid;
            $this->pid = $pid;
            $this->cname = $cname;
            $this->st = $st;
        } 
        // get pid แต่ละแถว
        public static function get($cid){
            echo "10 $cid";
            require("connection_connect.php");
            $sql = "select * from Color where ProductColorID = '$cid'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $cid = $my_row[ProductColorID];
            $pid = $my_row[ProductID];
            $cname = $my_row[ColorName];
            $st = $my_row[Stock];
            require("connection_close.php");
            return new Colors($cid,$pid,$cname,$st);
        }
        // getall โชว์ตารางหน้า Index
        public static function getAll(){
            $colorsList = [];
            require("connection_connect.php");
            $sql = "select * from Color";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $cid = $my_row[ProductColorID];
                $pid = $my_row[ProductID];
                $cname = $my_row[ColorName];
                $st = $my_row[Stock];
                $colorsList[] = new Colors($cid,$pid,$cname,$st);
            }
            require("connection_close.php");
            return $colorsList;
        }
        
        public static function add($cid,$pid,$cname,$st){
            echo "yyy";
            require("connection_connect.php");
            $sql = "insert into Color (ProductColorID,ProductID,ColorName,Stock)
            values('$cid','$pid','$cname','$st')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";              
        }

        public static function update($cid,$pid,$cname,$st){
            require("connection_connect.php");
            $sql = "update Color set ColorName='$cname',Stock='$st' where ProductColorID='$cid'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "Update success $result row"; 
        }

        public static function delete($cid,$pid,$cname,$st){
            require("connection_connect.php");
            $sql = "Delete from Color where ProductColorID='$cid'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "Add success $result row"; 
        }
    }
?>