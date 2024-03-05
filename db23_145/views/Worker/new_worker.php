<p> Welcome to Add Worker Page</p>
<div class="container">
    <form method="GET" action="">
        <label>รหัสพนักงาน<input type="text" name="worker_id"/></label><br>
        <label>คำนำหน้า<select name="title_id" class="form-select">
                <?php foreach ($titleList as $t) {
                    echo "<option value=$t->t_id>$t->t_name</option>";
                } ?>
            </select></label><br>
        <label>ชื่อ<input type="text" name="worker_name"></label><br>
        <label>นามสกุล<input type="text" name="worker_lastname"/></label><br>
        <label>ตำแหน่ง<select name="position_id" class="form-select">
                <?php foreach ($positionList as $p) {
                    echo "<option value=$p->p_id>$p->p_name</option>";
                } ?>
            </select></label><br>
        <input type="hidden" name="controller" value="worker" />
        <button class="btn btn-outline-dark" type="submit" name="action" value="index">Back</button>
        <button class="btn btn-outline-success" type="submit" name="action" value="addWorker">Save</button>
    </form>
</div>