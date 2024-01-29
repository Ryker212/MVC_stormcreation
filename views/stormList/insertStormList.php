<form method="get" action="">
<br>
    <label> StormName <input type="text" name="slName" /> </label><br><br>
    <label> StormNameEnglish <input type="text" name="slNameEng" /> </label><br><br>
    <label> StormNameMean <input type="text" name="slNameMe" /> </label><br><br>
    <!--<label> DateUseStorm <input type="date" name="slDateUse" /> </label><br><br> -->
    <label> SubstitueName <input type="text" name="slNameSub" /> </label><br><br>
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
    <button type="submit" name="action" value="addStormList"> Insert </button>
</form>
<style>

</style>