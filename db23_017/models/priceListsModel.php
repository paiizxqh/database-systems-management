<?php
class PriceLists{
public $ID;
public $Pid;
public $Qmin;
public $Qmax;
public $Pprice;
public $Sprice;

public function __construct($ID,$Pid,$Qmin,$Qmax,$Pprice,$Sprice)
{
    $this->ID = $ID;
    $this->Pid = $Pid;
    $this->Qmin = $Qmin;
    $this->Qmax = $Qmax;
    $this->Pprice = $Pprice;
    $this->Sprice = $Sprice;
}

//method getAll
public static function getAll()
{
    $priceLists = [];
    require("connection_connect.php");
    $sql = "select * from PriceList";
    $result = $conn->query($sql);
    while($my_row = $result->fetch_assoc())
    {
        $ID = $my_row[PriceListID];
        $Pid = $my_row[ProductID];
        $Qmin = $my_row[QuantityMin];
        $Qmax = $my_row[QuantityMax];
        $Pprice = $my_row[ProductPrice];
        $Sprice = $my_row[ScreenPrice];
        $priceLists[] = new PriceLists($ID,$Pid,$Qmin,$Qmax,$Pprice,$Sprice);
    }
    require("connection_close.php");

    return $priceLists;
}
//method add
public static function Add($Pid,$Qmin,$Qmax,$Pprice,$Sprice)
{
    require("connection_connect.php");
    $sql = "insert into PriceList (ProductID,QuantityMin,QuantityMax,ProductPrice,ScreenPrice)
    values('$Pid','$Qmin','$Qmax','$Pprice','$Sprice')";
    $result = $conn->query($sql);
    require("connection_close.php");

    return "add success $result rows";
}
//method get
public static function get($ID)
{
    echo "99 $ID ";
    require("connection_connect.php");
    $sql = "select * from PriceList where PriceListID = '$ID'";
    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $ID = $my_row[PriceListID];
    $Pid = $my_row[ProductID];
    $Qmin = $my_row[QuantityMin];
    $Qmax = $my_row[QuantityMax];
    $Pprice = $my_row[ProductPrice];
    $Sprice = $my_row[ScreenPrice];
    echo "100 $ID ";
    require("connection_close.php");
    return new PriceLists($ID,$Pid,$Qmin,$Qmax,$Pprice,$Sprice);
}
//method update
public static function updateList($ID,$Pid,$Qmin,$Qmax,$Pprice,$Sprice)
{
    echo "5";
    require("connection_connect.php");
    $sql = "update PriceList set QuantityMin = '$Qmin',QuantityMax = '$Qmax',
    ProductPrice = '$Pprice',ScreenPrice = '$Sprice' where PriceListID = '$ID'";
    $result = $conn->query($sql);

    require("connection_close.php");
    return "update success $result row";
}

}?>