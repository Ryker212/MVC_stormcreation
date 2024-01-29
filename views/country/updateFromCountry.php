<form method="get" action="">
    
    <input type="hidden" name="cID" value="<?php echo $country->country_ID;?>"/>
    <label type = "text">CountryID<?php echo "  ".$country->country_ID;?></label><br>
    <label>CountryName<input  type="text" name = "cName"
        value="<?php echo $country->name;?>"/></label><br>
    <input type="hidden" name="controller" value="country"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>

</from>