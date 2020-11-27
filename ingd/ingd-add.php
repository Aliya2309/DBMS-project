
<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 


$ingdn=$_POST["ingdn"];
$ingdq=$_POST["ingd-q"];
$ingdexp=$_POST["ingdexp"];
$ingdsupp=$_POST["ingdsuppid"];

$sql = 'INSERT INTO ingredients(ingd_name, quantity, expiry, sup_id) VALUES(?, ?, ?, ?);';

$stmt= $conn->prepare($sql);
$stmt->bind_param("sisi", $ingdn, $ingdq, $ingdexp, $ingdsupp);

if ($stmt->execute() === TRUE) {
  echo "Ingredient Added successfully!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<a href="ingredients.php">GO BACK</a>