<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<p> Welcome to our Summarize Page</p>
<form method="GET" action="">
    <input type="text" name="key" placeholder="Search here...">
    <input type="hidden" name="controller" value="summarize"/>
    <button class="btn btn-outline-info" type="submit" name="action" value="search"/>Search</button>
</form>
<table class="table table-striped" border = 1>
    <tr><td>ชื่อหน่วยงาน</td><td>ชื่ออุปกรณ์</td><td>สถานะใช้งานอยู่</td><td>สถานะชำรุด</td><td>สถานะพร้อมใช้งาน</td><td>จำนวนอุปกรณ์ทั้งหมด</td></tr>
    <?php
        foreach($summarizeList as $s){
            echo "<tr>
            <td>$s->a_name</td>
            <td>$s->e_name</td>
            <td>$s->s_active</td>
            <td>$s->s_inactive</td>
            <td>$s->s_already</td>
            <td>$s->total</td>
            </tr>";
        }
        echo "</table>";
    ?>