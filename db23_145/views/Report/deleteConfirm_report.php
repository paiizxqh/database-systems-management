<p>Welcome to Delete Report Page</p>
<?php
echo "Are you sure to delete this report?
    <br>ลำดับรายการที่ $report->l_id หน่วยงาน: [$report->a_name], อุปกรณ์: [$report->e_name]<br><br>"; ?>
<div class="container">
    <form method="GET" action="">
        <input type="hidden" name="controller" value="report" />
        <input type="hidden" name="list_id" value="<?php echo $report->l_id; ?>" />
        <button class="btn btn-outline-dark" type="submit" name="action" value="index">Back</button>
        <button class="btn btn-outline-danger" type="submit" name="action" value="delete">Delete</button>
    </form>
</div>