
<table border="1">
    <br>
    <tr><td>No.</td><td>Country</td><td>Name</td><td>Collection</td><td>Status</td>
    <?php 
    $i =1;
    foreach($StormList_List as $stormList)
    {
        echo" <tr><td>$i</td><td>$stormList->countryID</td> <td>$stormList->stormName</td><td>$stormList->collectionID</td><td>$stormList->status</td>";
        $i =$i+1;
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