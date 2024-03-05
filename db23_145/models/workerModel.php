<?php
    class Worker{
        public $w_id;
        public $t_id;
        public $t_name;
        public $w_name;
        public $w_lname;
        public $p_id;
        public $p_name;
        public $a_name;

        public function __construct($w_id,$t_id,$t_name,$w_name,$w_lname,$p_id,$p_name,$a_name){
            $this->w_id = $w_id;
            $this->t_id = $t_id;
            $this->t_name = $t_name;
            $this->w_name = $w_name;
            $this->w_lname = $w_lname;
            $this->p_id = $p_id;
            $this->p_name = $p_name;
            $this->a_name = $a_name;
        }

        public static function getAll(){
            $workerList = [];
            require("connection_connect.php");
            $sql  = "SELECT worker_id,title_id,title_name,worker_name,worker_lastname,position_id,position_name,agency_name FROM Worker NATURAL JOIN NameTitle NATURAL JOIN Position NATURAL JOIN Agency";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $w_id = $my_row[worker_id];
                $t_id = $my_row[title_id];
                $t_name = $my_row[title_name];
                $w_name = $my_row[worker_name];
                $w_lname = $my_row[worker_lastname];
                $p_id = $my_row[position_id];
                $p_name = $my_row[position_name];
                $a_name = $my_row[agency_name];
                $workerList[] = new Worker($w_id,$t_id,$t_name,$w_name,$w_lname,$p_id,$p_name,$a_name);
            }
            require("connection_close.php");
            return $workerList;
        }
        
        public static function get($w_id){
            require("connection_connect.php");
            $sql  = "SELECT * FROM Worker as w INNER JOIN Position as p ON w.position_id = p.position_id WHERE worker_id = '$w_id'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $w_id = $my_row[worker_id];
            $t_id = $my_row[title_id];
            $t_name = $my_row[title_name];
            $w_name = $my_row[worker_name];
            $w_lname = $my_row[worker_lastname];
            $p_id = $my_row[position_id];
            $p_name = $my_row[position_name];
            $a_name = $my_row[agency_name];
            require("connection_close.php");
            return new Worker($w_id,$t_id,$t_name,$w_name,$w_lname,$p_id,$p_name,$a_name);
        }
        
        public static function search($key){
            require("connection_connect.php");
            $sql  = "SELECT worker_id,title_name,worker_name,worker_lastname,position_name,agency_name FROM Worker NATURAL JOIN Agency NATURAL JOIN NameTitle NATURAL JOIN Position WHERE worker_id LIKE '%$key%' OR worker_name LIKE '%$key%' OR worker_lastname LIKE '%$key%' OR position_name LIKE '%$key%' OR agency_name LIKE '%$key%'";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $w_id = $my_row[worker_id];
                $t_name = $my_row[title_name];
                $w_name = $my_row[worker_name];
                $w_lname = $my_row[worker_lastname];
                $p_name = $my_row[position_name];
                $a_name = $my_row[agency_name];
                $workerList[] = new Worker($w_id,$t_id,$t_name,$w_name,$w_lname,$p_id,$p_name,$a_name);
            }
            require("connection_close.php");
            return $workerList;
        }

        public static function add($w_id,$t_id,$w_name,$w_lname,$p_id){
            require("connection_connect.php");
            $sql = "INSERT INTO Worker (worker_id,title_id,worker_name,worker_lastname,position_id) VALUES ('$w_id','$t_id','$w_name','$w_lname','$p_id')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

        public static function update($w_id,$t_id,$w_name,$w_lname,$p_id){
            require("connection_connect.php");
            $sql = "UPDATE Worker SET title_id = '$t_id', worker_name = '$w_name', worker_lastname = '$w_lname', position_id = '$p_id' WHERE worker_id = '$w_id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function delete($w_id){
            require_once("connection_connect.php");
            $sql = "DELETE FROM Worker WHERE worker_id = '$w_id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
?>