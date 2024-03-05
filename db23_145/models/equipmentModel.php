<?php
    class Equipment{
        public $e_id;
        public $e_name;

        public function __construct($e_id,$e_name){
            $this->e_id = $e_id;
            $this->e_name = $e_name;
        }
        public static function getAll(){
            $equipmentList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Equipment";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $e_id = $my_row[equipment_id];
                $e_name = $my_row[equipment_name];
                $equipmentList[] = new Equipment($e_id,$e_name);
            }
            require("connection_close.php");
            return $equipmentList;
        }

        public static function get($e_id){
            require("connection_connect.php");
            $sql  = "SELECT * FROM Equipment WHERE equipment_id = '$e_id'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $e_id = $my_row[equipment_id];
            $e_name = $my_row[equipment_name];
            require("connection_close.php");
            return new Equipment($e_id,$e_name);
        }

        public static function search($key){
            require("connection_connect.php");
            $sql = "SELECT * FROM Equipment WHERE equipment_id LIKE '%$key%' OR equipment_name LIKE '%$key%' GROUP BY equipment_id";
            $result = $conn->query($sql);
            while($my_row=$result->fetch_assoc()){
                $e_id = $my_row[equipment_id];
                $e_name = $my_row[equipment_name];
                $equipmentList[] = new Equipment($e_id,$e_name);
            }
        require("connection_close.php");
        return $equipmentList;
        }

        public static function add($e_id,$e_name){
            require("connection_connect.php");
            $sql = "INSERT INTO Equipment (equipment_id,equipment_name) VALUES ('$e_id','$e_name')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

        public static function update($e_id,$e_name){
            require("connection_connect.php");
            $sql = "UPDATE Equipment SET equipment_id = '$e_id',equipment_name = '$e_name' WHERE equipment_id = '$e_id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function delete($e_id){
            require_once("connection_connect.php");
            $sql = "DELETE FROM Equipment WHERE equipment_id = '$e_id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
?>