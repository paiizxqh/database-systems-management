<p>Welcome to updateForm Report Page</p>
<div class = "container">
<form method="GET" action="">
    <label>ลำดับที่<input type="text" name="list_id"
    value="<?php echo $report->l_id;?>"/>
    </label><br>
    <label>ชื่อหน่วยงาน<select name="agency_id" class="form-select">
            <?php foreach($agencyList as $a){
                echo "<option value=$a->a_id";
                    if($a->a_id==$report->a_id){
                        echo " selected='selected' ";}
                        echo ">$a->a_name</option>";
            }?>
        </select></label><br>
    <label>ชื่ออุปกรณ์<select name="equipment_id" class="form-select">
            <?php foreach($equipmentList as $e){
                echo "<option value=$e->e_id";
                    if($e->e_id==$report->e_id){
                        echo " selected='selected' ";}
                        echo ">$e->e_name</option>";
            }?>
        </select></label><br>
    <label>สถานะใช้งานอยู่<input type="text" name="active_amount"
    value="<?php echo $report->s_active;?>"/>
    </label><br>
    <label>สถานะชำรุด<input type="text" name="inactive_amount"
    value="<?php echo $report->s_inactive;?>"/>
    </label><br>
    <label>สถานะพร้อมใช้งาน<input type="text" name="already_amount"
    value="<?php echo $report->s_already;?>"/>
    </label><br>
    <input type="hidden" name="controller" value="report"/>
    <button class="btn btn-outline-dark" type="submit" name="action" value="index">Back</button>
    <button class="btn btn-outline-success" type="submit" name="action" value="update">Update</button>
</form>
</div>