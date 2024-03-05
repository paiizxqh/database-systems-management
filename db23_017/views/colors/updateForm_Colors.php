<form method="GET" action="">
<label>ProductID<select name = "Pid">
        <?php
            foreach($productLists as $list){
                echo "<option value = $list->Pid";
                if($list->Pid==$colors->pid){
                    echo "selected='selected'";
                }
                echo "> $list->Pid</option>";
            }
        ?>
    </select></label><br>
    <label>ProductColorID<input type="text" name="ProductColorID"
    value="<?php echo $colors->cid;?>"/></label><br>
    <label>ColorName<input type="text" name="ColorName"
    value="<?php echo $colors->cname;?>"/></label><br>
    <label>Stock<input type="text" name="Stock"
    value="<?php echo $colors->st;?>"/></label><br>
    
    <input type="hidden" name="controller" value="colors"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="updateColors">Update</button>
</form>