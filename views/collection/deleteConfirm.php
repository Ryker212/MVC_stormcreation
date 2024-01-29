<?php echo "<br>Are you sure to delete this Collection?<br>
        Collection ID : $collection->collection_ID    $collection->collection    <br>";?>
<form method="GET" action="">

    <input type="hidden" name="controller" value="collection"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
    <input type="hidden" name="coID" value="<?php echo $collection->collection_ID?>"/>

</form>