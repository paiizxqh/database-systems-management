<p>Welcome to Delete Worker Page</p>
<?php
    echo "Are you sure to delete this worker?
    <br>$worker->w_id $worker->w_name $worker->w_lname<br><br>";?>
    <div class = "container">
    <form method="GET" action="">
        <input type="hidden" name="controller" value="worker"/>
        <input type="hidden" name="worker_id" value="<?php echo $worker->w_id;?>"/>
        <button class="btn btn-outline-dark" type="submit" name="action" value="index">Back</button>
        <button class="btn btn-outline-danger" type="submit" name="action" value="delete">Delete</button>
    </form>
    </div>