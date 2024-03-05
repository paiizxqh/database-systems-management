<?php
    class Position{
        public $p_id;
        public $p_name;
        public $a_id;

        public function __construct($p_id,$p_name,$a_id){
            $this->p_id = $p_id;
            $this->p_name = $p_name;
            $this->a_id = $a_id;
        }

        public static function getAll(){
            $positionList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Position NATURAL JOIN Agency";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $p_id = $my_row[position_id];
                $p_name = $my_row[position_name];
                $a_id = $my_row[agency_id];
                $positionList[] = new Position($p_id,$p_name,$a_id);
            }
            require("connection_close.php");
            return $positionList;
        }
    }