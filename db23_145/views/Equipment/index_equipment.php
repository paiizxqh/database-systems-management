<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<p> Welcome to our Equipment Page</p>
<form method="GET" action="">
    <input type="text" name="key" placeholder="Search here...">
    <input type="hidden" name="controller" value="equipment"/>
    <button class="btn btn-outline-info" type="submit" name="action" value="search"/>Search</button>
    <br>new equipment <a href=?controller=equipment&action=newEquipment>Click</a>
</form>
<br>
<table class="table table-striped" border = 1>
    <tr><td>รหัสอุปกรณ์</td><td>ชื่ออุปกรณ์</td><td>Update</td><td>Delete</td></tr>
    <?php
        foreach($equipmentList as $e){
            echo "<tr>
            <td>$e->e_id</td>
            <td>$e->e_name</td>
            <td>
            <a href=?controller=equipment&action=updateForm&equipment_id=$e->e_id>Update</a>
            </td>
            <td>
            <a href=?controller=equipment&action=deleteConfirm&equipment_id=$e->e_id>Delete</a>
            </td>
            </tr>";
        }
        echo "</table>";
    ?>