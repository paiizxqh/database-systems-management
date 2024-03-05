<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<p> Welcome to our Ministry Page</p>
<table class="table table-striped" border = 1>
    <tr><td>ลำดับที่</td><td>ชื่อกระทรวง</td><td>อีเมล์</td><td>เบอร์ติดต่อ</td></tr>

    <?php
        foreach($ministryList as $m){
            echo "<tr>
            <td>$m->m_id</td>
            <td>$m->m_name</td>
            <td>$m->m_email</td>
            <td>$m->m_phone</td>
            </tr>";
        }
        echo "</table>";
    ?>