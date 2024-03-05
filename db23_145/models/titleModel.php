<?php
    class Title{
        public $t_id;
        public $t_name;

        public function __construct($t_id,$t_name){
            $this->t_id = $t_id;
            $this->t_name = $t_name;
        }

        public static function getAll(){
            $titleList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM NameTitle";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $t_id = $my_row[title_id];
                $t_name = $my_row[title_name];
                $titleList[] = new Title($t_id,$t_name);
            }
            require("connection_close.php");
            return $titleList;
        }
    }