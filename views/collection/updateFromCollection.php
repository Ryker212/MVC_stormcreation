<form method="get" action="">
    
    <input type="hidden" name="coID" value="<?php echo $collection->collection_ID;?>"/>
    <label type = "text">CollectionID<?php echo "  ".$collection->collection_ID;?></label><br>
    <label>Collection<input  type="text" name = "co"
        value="<?php echo $collection->collection;?>"/></label><br>
    <input type="hidden" name="controller" value="collection"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>

</from>