<p>Welcome to updateForm Worker Page</p>
<div class = "container">
<form method="GET" action="">
    <label>รหัสเจ้าหน้าที่<input type="text" name="worker_id"
    value="<?php echo $worker->w_id;?>"/>
    </label><br>
    <label>คำนำหน้า<select name="title_id" class="form-select">
            <?php foreach($titleList as $t){
                echo "<option value=$t->t_id";
                    if($t->t_id==$worker->t_id){
                        echo " selected='selected' ";}
                        echo ">$t->t_name</option>";
            }?>
        </select></label><br>
    <label>ชื่อ<input type="text" name="worker_name"
    value="<?php echo $worker->w_name;?>"/>
    </label><br>
    <label>นามสกุล<input type="text" name="worker_lastname"
    value="<?php echo $worker->w_lname;?>"/>
    </label><br>
    <label>ตำแหน่ง<select name="position_id" class="form-select">
            <?php foreach($positionList as $p){
                echo "<option value=$p->p_id";
                    if($p->p_id==$worker->p_id){
                        echo " selected='selected' ";}
                        echo ">$p->p_name</option>";
            }?>
        </select></label><br>
    <input type="hidden" name="controller" value="worker"/>
    <button class="btn btn-outline-dark" type="submit" name="action" value="index">Back</button>
    <button class="btn btn-outline-success" type="submit" name="action" value="update">Update</button>
</form>
</div>