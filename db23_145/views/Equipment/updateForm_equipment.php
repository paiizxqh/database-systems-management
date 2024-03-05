<p>Welcome to updateForm Equipment Page</p>
<div class = "container">
<form method="GET" action="">
    <label>รหัสอุปกรณ์<input type="text" name="equipment_id"
    value="<?php echo $equipment->e_id;?>"/>
    </label><br>
    <label>ชื่ออุปกรณ์<input type="text" name="equipment_name"
    value="<?php echo $equipment->e_name;?>"/>
    </label><br>
    <input type="hidden" name="controller" value="equipment"/>
    <button class="btn btn-outline-dark" type="submit" name="action" value="index">Back</button>
    <button class="btn btn-outline-success" type="submit" name="action" value="update">Update</button>
</form>
</div>