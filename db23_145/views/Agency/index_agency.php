<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<p> Welcome to our Agency Page</p>
<form method="GET" action="">
    <input type="text" name="key" placeholder="Search here...">
    <input type="hidden" name="controller" value="agency"/>
    <button class="btn btn-outline-info" type="submit" name="action" value="search"/>Search</button>
</form>
<table class="table table-striped" border = 1>
    <tr><td>รหัสหน่วยงาน</td><td>ชื่อหน่วยงาน</td><td>เบอร์ติดต่อ</td><td>จังหวัด</td><td>กระทรวง</td></tr>

    <?php
        foreach($agencyList as $a){
            echo "<tr>
            <td>$a->a_id</td>
            <td>$a->a_name</td>
            <td>$a->a_phone</td>
            <td>$a->p_name</td>
            <td>$a->m_name</td>
            </tr>";
        }
        echo "</table>";
    ?>