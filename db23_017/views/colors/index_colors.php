<p>Welcome to our colors</p>
Add Colors <a href=?controller=colors&action=newColors>Here</a><br>
<table border = 1>
<tr>
    <td>ProductColorID</td>
    <td>ProductID</td>
    <td>ColorName</td>
    <td>Stock</td>
    <td>Update</td>
    <td>Delete</td>
</tr>

    <?php foreach($colorsList as $list){
        echo "<tr><td>$list->cid</td>
        <td>$list->pid</td>
        <td>$list->cname</td>
        <td>$list->st</td>
        <td><a href=?controller=colors&action=updateFormColors&ProductColorID=$colors->cid>Update</a></td>
        <td><a href=?controller=colors&action=deleteConfirm&ProductColorID=$colors->cid>Delete</a></td></tr>";
    }
    echo "</table>"
?>