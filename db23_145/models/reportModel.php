<?php
    class Report{
        public $l_id;
        public $a_id;
        public $a_name;
        public $e_id;
        public $e_name;
        public $s_active;
        public $s_inactive;
        public $s_already;
        public $total;

        public function __construct($l_id,$a_id,$a_name,$e_id,$e_name,$s_active,$s_inactive,$s_already,$total){
            $this->l_id = $l_id;
            $this->a_id = $a_id;
            $this->a_name = $a_name;
            $this->e_id = $e_id;
            $this->e_name = $e_name;
            $this->s_active = $s_active;
            $this->s_inactive = $s_inactive;
            $this->s_already = $s_already;
            $this->total = $total;
        }
        public static function getAll(){
            $reportList = [];
            require("connection_connect.php");
            $sql = "SELECT list_id,agency_name,equipment_id,equipment_name,active_amount,inactive_amount,already_amount,SUM(active_amount+inactive_amount+already_amount) as 'Total' FROM EquipmentList NATURAL JOIN Equipment NATURAL JOIN Agency GROUP BY list_id";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $l_id = $my_row[list_id];
                $a_id = $my_row[agency_id];
                $a_name = $my_row[agency_name];
                $e_id = $my_row[equipment_id];
                $e_name = $my_row[equipment_name];
                $s_active = $my_row[active_amount];
                $s_inactive = $my_row[inactive_amount];
                $s_already = $my_row[already_amount];
                $total = $my_row[Total];
                $reportList[] = new Report($l_id,$a_id,$a_name,$e_id,$e_name,$s_active,$s_inactive,$s_already,$total);
            }
            require("connection_close.php");
            return $reportList;
        }

        public static function get($l_id){
            require("connection_connect.php");
            $sql  = "SELECT * FROM EquipmentList as el INNER JOIN Equipment as e ON el.equipment_id=e.equipment_id INNER JOIN Agency as a ON el.agency_id=a.agency_id WHERE list_id = '$l_id'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $l_id = $my_row[list_id];
            $a_id = $my_row[agency_id];
            $a_name = $my_row[agency_name];
            $e_id = $my_row[equipment_id];
            $e_name = $my_row[equipment_name];
            $s_active = $my_row[active_amount];
            $s_inactive = $my_row[inactive_amount];
            $s_already = $my_row[already_amount];
            $total = $my_row[Total];
            require("connection_close.php");
            return new Report($l_id,$a_id,$a_name,$e_id,$e_name,$s_active,$s_inactive,$s_already,$total);
        }

        public static function search($key){
            require("connection_connect.php");
            $sql = "SELECT list_id,agency_name,equipment_name,active_amount,inactive_amount,already_amount,SUM(active_amount+inactive_amount+already_amount) as 'Total' FROM EquipmentList NATURAL JOIN Agency NATURAL JOIN Equipment WHERE list_id LIKE '%$key%' OR agency_name LIKE '%$key%' OR equipment_name LIKE '%$key%' GROUP BY list_id";
            $result = $conn->query($sql);
            while($my_row=$result->fetch_assoc()){
                $l_id = $my_row[list_id];
                $a_name = $my_row[agency_name];
                $e_id = $my_row[equipment_id];
                $e_name = $my_row[equipment_name];
                $s_active = $my_row[active_amount];
                $s_inactive = $my_row[inactive_amount];
                $s_already = $my_row[already_amount];
                $total = $my_row[Total];
                $reportList[] = new Report($l_id,$a_id,$a_name,$e_id,$e_name,$s_active,$s_inactive,$s_already,$total);
            }
            require("connection_close.php");
            return $reportList;
        }

        public static function add($a_id,$e_id,$s_active,$s_inactive,$s_already){
            require("connection_connect.php");
            $sql = "INSERT INTO EquipmentList (agency_id,equipment_id,active_amount,inactive_amount,already_amount) VALUES ('$a_id','$e_id','$s_active','$s_inactive','$s_already')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

        public static function update($l_id,$a_id,$e_id,$s_active,$s_inactive,$s_already){
            require("connection_connect.php");
            $sql = "UPDATE EquipmentList SET agency_id = '$a_id', equipment_id = '$e_id', active_amount = '$s_active', inactive_amount = '$s_inactive', already_amount = '$s_already' WHERE list_id = '$l_id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function delete($l_id){
            require_once("connection_connect.php");
            $sql = "DELETE FROM EquipmentList WHERE list_id = '$l_id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
?>