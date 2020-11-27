

<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 


$ingdid=$_POST["ingdid"];
$ingdq=$_POST["ingd-q"];

$sql = 'INSERT INTO transaction (ingd_id, date, quantity) VALUES (?, CURDATE(), ?);';

$stmt= $conn->prepare($sql);
$stmt->bind_param("ii", $ingdid, $ingdq);

if ($stmt->execute() === TRUE) {
  echo "Transaction Done successfully!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<a href="transaction.php">GO BACK</a>