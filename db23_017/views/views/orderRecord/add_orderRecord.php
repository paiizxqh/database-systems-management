<form method="get" action="">
    <label> color <select name ="cid">
        <?php foreach($colorsList as $list){
            echo "<option value = $list->cid> $list->pid $list->cname </option>";} 
        ?>    
    </select></label><br>

    <label>Date <input type="text" name="dateorder"  ></label><br>
    <label>quantity <input type="number" name="quantity"></label><br>

    <input type="hidden" name="controller" value="orderRecord"/><br><br>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="addOrderRecord">Save</button>
</form>