<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<p> Welcome to our Report Page</p>
<form method="GET" action="">
    <input type="text" name="key" placeholder="Search here...">
    <input type="hidden" name="controller" value="report"/>
    <button class="btn btn-outline-info" type="submit" name="action" value="search"/>Search</button>
    <br>new report <a href=?controller=report&action=newReport>Click</a>
</form>
<br>
<table class="table table-striped" border = 1>
    <tr><td>ลำดับที่</td><td>ชื่อหน่วยงาน</td><td>ชื่ออุปกรณ์</td><td>สถานะใช้งานอยู่</td><td>สถานะชำรุด</td><td>สถานะพร้อมใช้งาน</td><td>จำนวนอุปกรณ์ทั้งหมด</td><td>Update</td><td>Delete</td></tr>
    <?php
        foreach($reportList as $r){
            echo "<tr>
            <td>$r->l_id</td>
            <td>$r->a_name</td>
            <td>$r->e_name</td>
            <td>$r->s_active</td>
            <td>$r->s_inactive</td>
            <td>$r->s_already</td>
            <td>$r->total</td>
            <td>
            <a href=?controller=report&action=updateForm&list_id=$r->l_id>Update</a>
            </td>
            <td>
            <a href=?controller=report&action=deleteConfirm&list_id=$r->l_id>Delete</a>
            </td>
            </tr>";
        }
        echo "</table>";
    ?>