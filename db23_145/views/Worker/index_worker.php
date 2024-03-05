<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<p>Welcome to our Worker Page</p>
    <form>
        <input type="text" name="key" placeholder="Search here...">
        <input type="hidden" name="controller" value="worker" />
        <button class="btn btn-outline-info" type="submit" name="action" value="search" />Search</button>
        <br>new worker <a href=?controller=worker&action=newWorker>Click</a>
    </form>
<br>
<table class="table table-striped" border=1>
    <tr>
        <td>รหัสเจ้าหน้าที่</td>
        <td>คำนำหน้า</td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>ตำแหน่ง</td>
        <td>สังกัด</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>

    <?php
    foreach ($workerList as $w) {
        echo "<tr>
            <td>$w->w_id</td>
            <td>$w->t_name</td>
            <td>$w->w_name</td>
            <td>$w->w_lname</td>
            <td>$w->p_name</td>
            <td>$w->a_name</td>
            <td>
            <a href=?controller=worker&action=updateForm&worker_id=$w->w_id>Update</a>
            </td>
            <td>
            <a href=?controller=worker&action=deleteConfirm&worker_id=$w->w_id>Delete</a>
            </td>
            </tr>";
    }
    echo "</table>";
    ?>