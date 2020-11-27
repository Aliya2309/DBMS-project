DELETE FROM schedule WHERE id_schedule=1;
<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 


$chefid=$_POST["chefid"];
$starttime=$_POST["starttime"];
$endtime=$_POST["endtime"];
$shiftdate=$_POST["shiftdate"];

$sql = 'INSERT INTO schedule (chef_id, start_time, end_time, shift_date) VALUES (?, ?, ?, ?);';

$stmt= $conn->prepare($sql);
$stmt->bind_param("isss", $chefid, $starttime, $endtime, $shiftdate);

if ($stmt->execute() === TRUE) {
  echo "Schedule added successfully!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<a href="schedule.php">GO BACK</a>