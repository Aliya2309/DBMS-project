<?php include_once('C:\laragon\www\dbmspr\db-conn.php');?>



ADD SCHEDULE:<br><br>
        <form action="sch-add.php" method="post">
        CHEF ID: <input type="text" name="chefid"><br>
        START TIME: <input type="text" name="starttime"><br>
        END TIME: <input type="text" name="endtime"><br>
        SHIFT DATE: <input type="text" name="shiftdate"><br>
        <input type="submit">
        </form>

REMOVE SCHEDULE:<br><br>
        <form action="sch-delete.php" method="post">
        SCHEDULE ID: <input type="text" name="schid"><br>
        <input type="submit">
        </form>

VIEW SCHEDULE OF SPECIFIC CHEF:<br><br>
        <form action="sch-chef.php" method="post">
        CHEF ID: <input type="text" name="chefid"><br>
        <input type="submit">
        </form>

<?php
//printing whole tabel:
$sql = "SELECT * FROM schedule";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table>
    <tr>
        <th>ID</th>
        <th>CHED ID</th>
        <th>START TIME</th>
        <th>END TIME</th>
        <th>SHIFT DATE</th>
    </tr>
  <?php while($row = $result->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row["id_schedule"]   ?></td>
        <td><?php echo $row["chef_id"]   ?></td>
        <td><?php echo $row["start_time"]   ?></td>
        <td><?php echo $row["end_time"]   ?></td>
        <td><?php echo $row["shift_date"]   ?></td>
    </tr>
  <?php }  ?>
  </table>
    
  <?php
    } else {
    echo "0 results";
    }