<?php include_once('C:\laragon\www\dbmspr\db-conn.php');?>



SEARCH BY INGREDIENT NAME:<br><br>
        <form action="supp-search.php" method="post">
        ID: <input type="text" name="ingd"><br>
        <input type="submit">
        </form>

<?php
//printing whole tabel:
$sql = "SELECT * FROM supplier";
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
    </tr>
  <?php while($row = $result->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row["id_supplier"]   ?></td>
        <td><?php echo $row["sup_name"]   ?></td>
        <td><?php echo $row["sup_phone"]   ?></td>
        <td><?php echo $row["sup_address"]   ?></td>
    </tr>
  <?php }  ?>
  </table>
    
  <?php
    } else {
    echo "0 results";
    }