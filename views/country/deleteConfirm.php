<?php echo "<br>Are you sure to delete this Country?<br>
        Country ID : $country->country_ID    $country->name    <br>";?>
<form method="GET" action="">

    <input type="hidden" name="controller" value="country"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
    <input type="hidden" name="cID" value="<?php echo $country->country_ID?>"/>

</form>