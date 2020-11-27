
<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 


$schid=$_POST["schid"];

$sql = 'DELETE FROM schedule WHERE id_schedule=?;';

$stmt= $conn->prepare($sql);
$stmt->bind_param("i", $schid);

if ($stmt->execute() === TRUE) {
  echo "Schedule deleted successfully!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<a href="schedule.php">GO BACK</a>