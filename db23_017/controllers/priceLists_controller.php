<?php
class PriceListsController
{
    public function index()
    {
        $price_list = PriceLists::getAll();
         require_once('views/priceLists/index_priceLists.php');
    }

    public function newList()
    {
        $product_list = Product::getAll();
         require_once('views/priceLists/newList_priceLists.php');
    }

    public function addNewList()
    {
        $Pid = $_GET['Pid'];
        $Qmin = $_GET['Qmin'];
        $Qmax = $_GET['Qmax'];
        $Pprice = $_GET['Pprice'];
        $Sprice = $_GET['Sprice'];
        PriceLists::Add($Pid,$Qmin,$Qmax,$Pprice,$Sprice);

        PriceListsController::index();
    }

    public function updateForm()
    {
        echo "2";
        $ID = $_GET['PriceListID'];
        echo "9 $ID";
        $price_List = PriceLists::get($ID);
        $product_list = Product::getAll();
        require_once('views/priceLists/updateForm_priceLists.php');
    }

    public function update()
    {
        echo "3";
        $ID = $_GET['ID'];
        $Pid = $_GET['Pid'];
        $Qmin = $_GET['Qmin'];
        $Qmax = $_GET['Qmax'];
        $Pprice = $_GET['Pprice'];
        $Sprice = $_GET['Sprice'];
        PriceLists::updateList($ID,$Pid,$Qmin,$Qmax,$Pprice,$Sprice);
        PriceListsController::index();
    }
}
?>