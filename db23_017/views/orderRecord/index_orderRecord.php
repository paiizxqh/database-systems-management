<p>Welcome to our orderRecord</p>
new orderRecord<a href =?controller=orderRecord&action=newOrderRecord> clik </a><br>
<table border = 1 >
<tr><td>colorid</td><td>date</td><td>qantity</td><td>update</td><td>delete</td></tr>
<?php foreach($orderRecordList as $list){
    echo "<tr><td>$list->colorid</td><td>$list->date</td><td>$list->quantity</td>
    <td><a href=?controller=orderRecord&action=updateForm&OrderRecordID=$list->id>update</a></td>
    <td><a href=?controller=orderRecord&action=delete&OrderRecordID=$list->id>delete</a></td>";

}
echo "</table>"
?>