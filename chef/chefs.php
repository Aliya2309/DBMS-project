<!--
<form action="added" method="post">
                
<label > Item Name <label>
<input type="text" name="item_name"><br><br>
<label > Description <label>
<input type="text" name="description"><br><br>
<label > Category <label>
<input type="text" name="category"><br><br>
<label > Price <label>
<input type="int" name="price"><br><br>

<button type="submit">Submit</button>
</form>-->
<?php include_once('C:\laragon\www\dbmspr\db-conn.php')?>



DELETE CHEF:<br><br>
        <form action="chef-delete.php" method="post">
        ID: <input type="text" name="chef-id"><br>
        <input type="submit">
        </form>


ADD NEW CHEF:<br><br>
    <form action="chef-insert.php" method="post">
    NAME: <input type="text" name="name"><br>
    PHONE NO: <input type="text" name="p-no"><br>
    ADDRESS: <input type="text" name="add"><br>
    POSITION: <input type="text" name="pos"><br>
    <input type="submit">
    </form><br><br>




<?php
//printing whole tabel:
$sql = "SELECT * FROM chefs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PHONE NO</th>
        <th>ADDRESS</th>
        <th>POSITION</th>
        <th>HOURS WORKED</th>
    </tr>
  <?php while($row = $result->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row["id_chefs"]   ?></td>
        <td><?php echo $row["name"]   ?></td>
        <td><?php echo $row["phone_no"]   ?></td>
        <td><?php echo $row["address"]   ?></td>
        <td><?php echo $row["position"]   ?></td>
        <td><?php echo $row["hours_worked"]   ?></td>
    </tr>
  <?php }  ?>
  </table>
    
  <?php
    } else {
    echo "0 results";
    }