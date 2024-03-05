<form method = "GET" action = "">
<label>ProductID<select name = "Pid"> 
    <?php
        foreach($product_list as $product){
            echo "<option value = $product->Pid> $product->Pid</option>";
        }
    ?>
</select></label><br>
<label>QuantityMin<input type ="text" name="Qmin"/></label><br>
<label>QuantityMax<input type ="text" name="Qmax"/></label><br>
<label>ProductPrice<input type ="text" name="Pprice"/></label><br>
<label>ScreenPrice<input type ="text" name="Sprice"/></label><br>

<input type ="hidden" name = "controller" value="priceLists" />
<button type="submit" name = "action" value="index">Back</button>
<button type="submit" name = "action" value="addNewList">Save</button>
</form>