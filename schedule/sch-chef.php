<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 


$chefid=$_POST["chefid"];

//printing whole tabel:
$sql = "SELECT * FROM schedule where chef_id=?";
$stmt= $conn->prepare($sql);
$stmt->bind_param("i", $chefid);
$stmt->execute();
$result = $stmt->get_result();
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
    }?>

    <a href="schedule.php">GO BACK</a>