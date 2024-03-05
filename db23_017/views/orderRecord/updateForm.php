<p>Welcome to our updateForm</p>
<form method="get" action="">
<label>color <select name="cid">
    <?php foreach($colorsList as $list){
        echo"<option value = $list->id";
        if($list->id == $orderRecordList->id){
            echo "selected='selected'";}
        echo ">$list->pid $list->cname";
    }?></select></label><br>

<label>date <input type="text" name="date" value="<?php echo $orderRecordList->date; ?>"/></label><br>
<label>quantitiy <input type="number" name="quantitiy" value="<?php echo $orderRecordList->quantity; ?>"/></label><br>

<input type="hidden" name="controller" value="orderRecord"/>
<button type="submit" name="action" value="index" >Back</button>
<button type="submit" name="action" value="update">update</button>
</form>

