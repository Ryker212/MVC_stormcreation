<?php echo "<br>Are you sure to delete this Stormlist?<br>
        Stormlist ID : $stormList->stormList_ID   $stormList->stormName   <br>";?>
<form method="GET" action="">

    <input type="hidden" name="controller" value="stormList"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
    <input type="hidden" name="slID" value="<?php echo  $stormList->stormList_ID?>"/>

</form>
<style>

</style>