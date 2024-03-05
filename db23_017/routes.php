<?php
$controllers = array('pages'=>['home','error'],'colors'=>['index','newColors','addColors'],'priceLists'=>['index','newList','addNewList'],'orderRecord'=>['index','newOrderRecord','addOrderRecord']);

function call($controller,$action)
{
    echo "routes to ".$controller." - ".$action."<br>";
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages": $controller = new PagesController();
            break;
        case "colors" : require_once("models/colorsModel.php");
                        require_once("models/productModel.php");
                        $controller = new ColorsController();
                        break;
        case "priceLists" : require_once("models/priceListsModel.php");
                            require_once("models/productModel.php");
                            $controller = new PriceListsController();
                            break;
        case "orderRecord" : require_once("models/orderRecordModel.php");
                             require_once("models/colorsModel.php");
                            $controller = new OrderRecordController();
                            break;
    }
    $controller -> {$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action);
    }
    else
    {
        call('pages','error');
    }
}
else
{
    call('pages','error');
}
?>