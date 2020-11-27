<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 

$sql = "SELECT * FROM ingredients WHERE expiry<CURDATE();";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>QUANTITY</th>
        <th>EXPIRY</th>
        <th>SUPPLIER ID</th>
    </tr>
  <?php while($row = $result->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row["id_ingredients"]   ?></td>
        <td><?php echo $row["ingd_name"]   ?></td>
        <td><?php echo $row["quantity"]   ?></td>
        <td><?php echo $row["expiry"]   ?></td>
        <td><?php echo $row["sup_id"]   ?></td>
    </tr>
  <?php }  ?>
  </table>
    
  <?php
    } else {
    echo "0 results";
    }

?>

<a href="ingredients.php">GO BACK</a>