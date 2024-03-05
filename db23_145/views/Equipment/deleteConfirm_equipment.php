<p>Welcome to Delete Equipment Page</p>
<?php
echo "Are you sure to delete this equipment?
    <br>$equipment->e_id $equipment->e_name<br><br>"; ?>
<div class="container">
    <form method="GET" action="">
        <input type="hidden" name="controller" value="equipment" />
        <input type="hidden" name="equipment_id" value="<?php echo $equipment->e_id; ?>" />
        <button class="btn btn-outline-dark" type="submit" name="action" value="index">Back</button>
        <button class="btn btn-outline-danger" type="submit" name="action" value="delete">Delete</button>
    </form>
</div>