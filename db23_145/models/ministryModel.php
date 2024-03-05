<?php
    class Ministry{
        public $m_id;
        public $m_name;
        public $m_email;
        public $m_phone;

        public function __construct($m_id,$m_name,$m_email,$m_phone){
            $this->m_id = $m_id;
            $this->m_name = $m_name;
            $this->m_email = $m_email;
            $this->m_phone = $m_phone;
        }

        public static function getAll(){
            $ministryList = [];
            require("connection_connect.php");
            $sql  = "SELECT * FROM Ministry";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $m_id = $my_row[ministry_id];
                $m_name = $my_row[ministry_name];
                $m_email = $my_row[ministry_email];
                $m_phone = $my_row[ministry_phone];
                $ministryList[] = new Ministry($m_id,$m_name,$m_email,$m_phone);
            }
            require("connection_close.php");
            return $ministryList;
        }
    }
?>