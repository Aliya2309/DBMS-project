<?php include_once('C:\laragon\www\dbmspr\db-conn.php');?>

<!--
      FORM LOGIC

-->

SEARCH BY INGREDIENT NAME:<br><br>
        <form action="ingd-search.php" method="post">
        Name: <input type="text" name="ingd"><br>
        <input type="submit">
        </form>

UPDATE INGREDIENT QUANTITY:<br><br>
      <form action="ingd-reduce.php" method="post">
      Name: <input type="text" name="ingdn"><br>
      New Quantity: <input type="text" name="ingd-q"><br>
      <input type="submit">
      </form>

<a href="ingd-exp.php">VIEW EXPIRED PRODUCTS</a><br>

ADD INGREDIENT:<br><br>
      <form action="ingd-add.php" method="post">
      Name: <input type="text" name="ingdn"><br> 
      Quantity: <input type="text" name="ingd-q"><br>
      Expiry: <input type="text" name="ingdexp"><br>
      Supplier ID: <input type="text" name="ingdsuppid"><br>
      <input type="submit">
      </form>

DELETE INGREDIENT BY ID:<br><br>
        <form action="ingd-remove.php" method="post">
        ID: <input type="text" name="ingd"><br>
        <input type="submit">
        </form>



<?php
//printing whole tabel:
$sql = "SELECT * FROM ingredients";
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