<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 


$ingdid=$_POST["ingd"];

$sql = 'DELETE FROM ingredients WHERE id_ingredients=?;';

$stmt= $conn->prepare($sql);
$stmt->bind_param("i", $ingdid);

if ($stmt->execute() === TRUE) {
  echo "Ingredient Deleted successfully!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<a href="ingredients.php">GO BACK</a>