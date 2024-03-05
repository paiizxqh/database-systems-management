<?php
class Product
{
public $Pid;
public $Pname;
public $Pdesc;
public $Ptype;
public $PCat;
public $PminStock;

public function __construct($Pid,$Pname,$Pdesc,$Ptype,$PCat,$PminStock)
{
    $this->Pid = $Pid;
    $this->Pname = $Pname;
    $this->Pdesc = $Pdesc;
    $this->Ptype = $Ptype;
    $this->PCat = $PCat;
    $this->PminStock = $PminStock;
}
public static function getAll()
{
    $productLists = [];
    require("connection_connect.php");
    $sql = "select * from Product";
    $result = $conn->query($sql);
    while ($my_row = $result->fetch_assoc())
    {
        $Pid = $my_row[ProductID];
        $Pname = $my_row[ProductName];
        $Pdesc = $my_row[ProductDescript]; 
        $Ptype = $my_row[ProductTypeID];
        $PCat = $my_row[CategoryID];
        $PminStock = $my_row[MinStock];

        $productLists[]= new Product($Pid,$Pname,$Pdesc,$Ptype,$PCat,$PminStock);

    }
    require("connection_close.php");
    return $productLists;
}
}
?>