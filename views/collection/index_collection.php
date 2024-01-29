<table border="1">
    <tr><td>IDcollection</td><td>Collection</td>

    <br><div class="topnavff"><a href="?controller=collection&action=insert">Insert </a></div>
    <br>
    <td></td><td></td></tr>
    <?php foreach($collection_List as $collection)
    {
        echo"<tr> <td>$collection->collection_ID</td><td>$collection->collection</td>
        <td><a href=?controller=collection&action=updateFrom&coID=$collection->collection_ID>Update</a></td> 
        <td><a href=?controller=collection&action=deleteConfirm&coID=$collection->collection_ID>Delete</a></td> </tr>";
    }
echo"</table>";
?>