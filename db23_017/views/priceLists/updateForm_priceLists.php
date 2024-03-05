<form method="GET" action="">
<label>ProductID<select name = "Pid"> 
    <?php
        foreach($product_list as $product){
            echo "<option value = $product->Pid";
            if($product->Pid==$price_List->Pid)
            {
                echo " selected='selected' ";
            }
            echo ">$product->Pid</option>";
        }
    ?>
</select></label><br>
<label>QuantityMin<input type ="text" name="Qmin" value="<?php echo $price_List->Qmin; ?>"/> </label><br>
<label>QuantityMax<input type ="text" name="Qmax" value="<?php echo $price_List->Qmax; ?>"/> </label><br>
<label>ProductPrice<input type ="text" name="Pprice" value="<?php echo $price_List->Pprice; ?>"/> </label><br>
<label>ScreenPrice<input type ="text" name="Sprice" value="<?php echo $price_List->Sprice; ?>"/> </label><br>

<input type ="hidden" name = "controller" value="priceLists" />
<button type="submit" name = "action" value="index">Back</button>
<button type="submit" name = "action" value="update">update</button>
</form>
