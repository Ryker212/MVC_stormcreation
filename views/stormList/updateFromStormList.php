<form method="get" action="">
<input type="hidden" name="slID" value="<?php echo $stormList->stormList_ID;?>"/>
<!-- <label type = "text">Check<?php echo "  ".$stormList->stormList_ID;?></label> -->
<br>
    <label> StormName <input type="text" name="slName"value="<?php echo $stormList->stormName;?>" /> </label><br><br>
    <label> StormNameEnglish <input type="text" name="slNameEng"value="<?php echo $stormList->stormNameEng;?>" /> </label><br><br>
    <label> StormNameMean <input type="text" name="slNameMe"value="<?php echo $stormList->stormNameMean;?>" /> </label><br><br>
    <!-- <label> DateUseStorm <input type="date" name="slDateUse"value="<?php echo $stormList->dateUseStorm;?>" /> </label><br><br>-->
    <label> SubstitueName <input type="text" name="slNameSub"value="<?php echo $stormList->substitueName;?>" /> </label><br><br>
    <label> Country <select name="c"><br>

<?php foreach($country_List as $country){echo"<option value= $country->country_ID>
$country->name</option>";}?>

</select></label><br><br>
    <label> Collection <select name="co"><br>

<?php foreach($collection_List as $collection){echo"<option value= $collection->collection_ID>
$collection->collection</option>";}?>

</select></label><br><br> </label>
    
    <input type="hidden" name="controller" value="stormList"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>
<style>

</style>