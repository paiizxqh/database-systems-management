<p> Welcome to Add Report Page</p>
<div class = "container">
<form method="GET" action="">
    <label>ชื่อหน่วยงาน
        <select name="agency_id" class="form-select">
            <?php foreach($agencyList as $a){
                echo "<option value=$a->a_id>$a->a_name</option>";
            }?>
        </select></label><br>
    <label>ชื่ออุปกรณ์
    <select name="equipment_id" class="form-select">
            <?php foreach($equipmentList as $e){
                echo "<option value=$e->e_id>$e->e_name</option>";
            }?>
        </select></label><br>
    <label>สถานะใช้งานอยู่<input type="text" name="active_amount"/></label><br>
    <label>สถานะชำรุด<input type="text" name="inactive_amount"/></label><br>
    <label>สถานะพร้อมใช้งาน<input type="text" name="already_amount"/></label><br>
    <input type="hidden" name="controller" value="report"/>
    <button class="btn btn-outline-dark" type="submit" name="action" value="index">Back</button>
    <button class="btn btn-outline-success" type="submit" name="action" value="addReport">Save</button>
</form>
</div>