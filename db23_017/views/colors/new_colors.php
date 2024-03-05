<form method="GET" action="">
    <label>ProductID<select name = "pid">
        <?php
            foreach($productLists as $list){
                echo "<option value = $list->Pid> $list->Pid</option>";
            }
        ?>
    </select></label><br>
    <label>ColorName<input type="text" name="cname"/></label><br>
    <label>Stock<input type="text" name="st"/></label><br>
    
    <input type="hidden" name="controller" value="colors"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addColors">Save</button>
</form>