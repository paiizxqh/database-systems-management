<?php
    class Summarize{
        public $a_id;
        public $a_name;
        public $e_id;
        public $e_name;
        public $s_active;
        public $s_inactive;
        public $s_already;
        public $total;

        public function __construct($a_id,$a_name,$e_id,$e_name,$s_active,$s_inactive,$s_already,$total){
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
            $summarizeList = [];
            require("connection_connect.php");
            $sql = "SELECT agency_name,equipment_name,active_amount,inactive_amount,already_amount,(active_amount+inactive_amount+already_amount) AS 'Total' FROM EquipmentList as el INNER JOIN Equipment as e ON el.equipment_id=e.equipment_id INNER JOIN Agency as a ON el.agency_id=a.agency_id ORDER BY agency_name";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $a_id = $my_row[agency_id];
                $a_name = $my_row[agency_name];
                $e_id = $my_row[equipment_id];
                $e_name = $my_row[equipment_name];
                $s_active = $my_row[active_amount];
                $s_inactive = $my_row[inactive_amount];
                $s_already = $my_row[already_amount];
                $total = $my_row[Total];
                $summarizeList[] = new Summarize($a_id,$a_name,$e_id,$e_name,$s_active,$s_inactive,$s_already,$total);
            }
            require("connection_close.php");
            return $summarizeList;
        }

        public static function search($key){
            require("connection_connect.php");
            $sql = "SELECT agency_name,equipment_name,active_amount,inactive_amount,already_amount,(active_amount+inactive_amount+already_amount) AS 'Total' FROM EquipmentList as el INNER JOIN Equipment as e ON el.equipment_id=e.equipment_id INNER JOIN Agency as a ON el.agency_id=a.agency_id WHERE agency_name LIKE '%$key' OR equipment_name LIKE '%$key%' ORDER BY agency_name";
            $result = $conn->query($sql);
            while($my_row=$result->fetch_assoc()){
                $a_id = $my_row[agency_id];
                $a_name = $my_row[agency_name];
                $e_id = $my_row[equipment_id];
                $e_name = $my_row[equipment_name];
                $s_active = $my_row[active_amount];
                $s_inactive = $my_row[inactive_amount];
                $s_already = $my_row[already_amount];
                $total = $my_row[Total];
                $summarizeList[] = new Summarize($a_id,$a_name,$e_id,$e_name,$s_active,$s_inactive,$s_already,$total);
            }
            require("connection_close.php");
            return $summarizeList;
        }
    }