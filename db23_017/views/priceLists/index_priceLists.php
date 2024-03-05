<p>Welcome to our priceLists</p>

new List<a href=?controller=priceLists&action=newList> click </a><br>
<table border = 1>
<tr><td> ProductID </td><td> QuantityMin </td><td> QuantityMax </td>
<td> ProductPrice </td><td> ScreenPrice </td>
<td> update </td><td> delete </td></tr>
<?php foreach($price_list as $priceList)
{
    echo "<tr><td>$priceList->Pid</td>
    <td>$priceList->Qmin</td> <td>$priceList->Qmax</td>
    <td>$priceList->Pprice</td><td>$priceList->Sprice</td>
    <td><a href=?controller=priceLists&action=updateForm&PriceListID=$priceList->ID>update</a></td>
    <td><a href=?controller=priceLists&action=deleteConfirm&PriceListID=$priceList->ID>delete</a></td>
    </tr>";
}
echo "</table>";
?>

