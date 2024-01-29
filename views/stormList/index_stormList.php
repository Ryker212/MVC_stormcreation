<table border="1">
    <tr><td>IDstormList</td><td>StormName</td><td>StormNameEnglish</td><td>StormNameMean</td><td>DateUseStorm</td><td>DateEndStorm</td><td>Status</td><td>SubstitueName</td><td>Country</td><td>collection</td>
    
    <br><div class="topnavff"><a href="?controller=stormList&action=insert">Insert</a> 
        <a href="?controller=stormList&action=check">CheckStatus</a>
        <a href="?controller=stormList&action=summary">Summary of names</a></div>
    <br>
    <td></td><td></td></tr>
    <?php foreach($StormList_List as $stormList)
    {
        echo"<tr> <td>$stormList->stormList_ID</td><td>$stormList->stormName</td><td>$stormList->stormNameEng</td><td>$stormList->stormNameMean</td><td>$stormList->dateUseStorm</td>
        <td>$stormList->dateEndStorm</td><td>$stormList->status</td><td>$stormList->substitueName</td><td>$stormList->countryID</td><td>$stormList->collectionID</td>
        <td><a href=?controller=stormList&action=updateFrom&slID=$stormList->stormList_ID>Update</a></td> 
        <td><a href=?controller=stormList&action=deleteConfirm&slID=$stormList->stormList_ID>Delete</a></td> </tr>";
    }
echo"</table>";
?>
<style>
    table {
        width: 80%;
        text-align: center;
        border-spacing: 0;
        margin-left: auto;
        margin-right: auto;
    }
    .head {
        background-color: darkcyan;
        color: white;
    }
    table tr td {
        border: solid 1px silver;
    }
</style>