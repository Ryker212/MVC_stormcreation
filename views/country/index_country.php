

<table border="1">
    <tr><td>IDcountry</td><td>Namecountry</td>

    <br><div class="topnavff">
    <a href="?controller=country&action=insert">Insert </a></div>
    <br>
    <td></td><td></td></tr>
    <?php foreach($country_List as $country)
    {
        echo"<tr> <td>$country->country_ID</td><td>$country->name</td>
        <td><a href=?controller=country&action=updateFrom&cID=$country->country_ID>Update</a></td> 
        <td><a href=?controller=country&action=deleteConfirm&cID=$country->country_ID>Delete</a></td> </tr>";
    }
echo"</table>";
?>
