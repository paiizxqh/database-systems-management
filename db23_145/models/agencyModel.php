<?php
    class Agency{
        public $a_id;
        public $a_name;
        public $a_phone;
        public $p_name;
        public $m_name;

        public function __construct($a_id,$a_name,$a_phone,$p_name,$m_name){
            $this->a_id = $a_id;
            $this->a_name = $a_name;
            $this->a_phone = $a_phone;
            $this->p_name = $p_name;
            $this->m_name = $m_name;
        }

        public static function search($key){
            require("connection_connect.php");
            $sql = "SELECT agency_id,agency_name,agency_phone,province_name,ministry_name FROM Agency NATURAL JOIN Ministry NATURAL JOIN Province WHERE agency_id LIKE '%$key%' OR agency_name LIKE '%$key%' OR province_name LIKE '%$key%'";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $a_id = $my_row[agency_id];
                $a_name = $my_row[agency_name];
                $a_phone = $my_row[agency_phone];
                $p_name = $my_row[province_name];
                $m_name = $my_row[ministry_name];
                $agencyList[] = new Agency($a_id,$a_name,$a_phone,$p_name,$m_name);
            }
            require("connection_close.php");
            return $agencyList;
        }

        public static function getAll(){
            $agencyList = [];
            require("connection_connect.php");
            $sql = "SELECT agency_id,agency_name,agency_phone,province_name,ministry_name FROM Agency NATURAL JOIN Province NATURAL JOIN Ministry ORDER BY agency_id";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $a_id = $my_row[agency_id];
                $a_name = $my_row[agency_name];
                $a_phone = $my_row[agency_phone];
                $p_name = $my_row[province_name];
                $m_name = $my_row[ministry_name];
                $agencyList[] = new Agency($a_id,$a_name,$a_phone,$p_name,$m_name);
            }
            require("connection_close.php");
            return $agencyList;
        }
        /*
        public static function add($a_id,$a_name,$a_phone,$p_name,$m_name){
            require("connection_connect.php");
            $sql = "INSERT INTO Agency (agency_id,agency_name,agency_phone,position_id,ministry_id) VALUES ('$a_id','$a_name','$a_phone','$p_id','$m_id')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }*/
    }
?>