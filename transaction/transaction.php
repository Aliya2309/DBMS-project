<?php include_once('C:\laragon\www\dbmspr\db-conn.php');?>



ADD TRANSACTION:<br><br>
        <form action="trans-add.php" method="post">
        INGREDIENT ID: <input type="text" name="ingdid"><br>
        INGREDIENT QUANTITY: <input type="text" name="ingd-q"><br>
        <input type="submit">
        </form>

<?php
//printing whole tabel:
$sql = "SELECT * FROM transaction";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table>
    <tr>
        <th>ID</th>
        <th>INGREDIENT</th>
        <th>DATE</th>
        <th>QUANTITY</th>
    </tr>
  <?php while($row = $result->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row["id_transaction"]   ?></td>
        <td><?php echo $row["ingd_id"]   ?></td>
        <td><?php echo $row["date"]   ?></td>
        <td><?php echo $row["quantity"]   ?></td>
    </tr>
  <?php }  ?>
  </table>
    
  <?php
    } else {
    echo "0 results";
    }