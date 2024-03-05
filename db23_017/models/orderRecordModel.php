<?php
    class OrderRecord{
    public $id;
    public $colorid ;
    public $date ;
    public $quantity;

    public function __construct($id,$colorid,$date,$quantity){
        $this->id = $id;
        $this->colorid = $colorid;
        $this->date = $date;
        $this->quantity = $quantity;
    }
    
    public static function getAll(){
        $orderRecordList = [];
        require("connection_connect.php");
        $sql = "select * from OrderRecord";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $id = $my_row[OrderRecordID];
            $colorid = $my_row[ProductColorID];
            $date = $my_row[Date];
            $quantity = $my_row[QuantityRecord];
            $orderRecordList[] = new OrderRecord($id,$colorid,$date,$quantity);
        }
        require("connection_close.php");
        return $orderRecordList;
    }

    public static function get($id){
        echo " 123 $id ";
        require("connection_connect.php");
        $sql = "select * from OrderRecord where OrderRecordID = '$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row[OrderRecordID];
        $colorid = $my_row[ProductColorID];
        $date = $my_row[Date];
        $quantity = $my_row[QuantityRecord];
        require("connection_close.php");
        return new OrderRecord($id,$colorid,$date,$quantity);

    }

    public static function add($colorid,$date,$quantity){
        require("connection_connect.php");
        $sql = "insert into OrderRecord(ProductColorID,Date,QuantityRecord) values ('$colorid','$date','$quantity')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function update($id,$colorid,$date,$quantity){
        require("connection_connect.php");
        $sql = "update OrderRecord SET ProductColorID = '$colorid',Date='$date',QuantityRecord='$quantity' where OrderRecordID ='$id' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "edit success $result row";
    }

    public static function delete($id){
        require("connection_connect.php");
        $sql = "DELETE FROM OrderRecord WHERE OrderRecordID ='$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
    }
?>