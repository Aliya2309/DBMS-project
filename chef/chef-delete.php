<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 


        $id=$_POST["chef-id"];
        $sql = 'DELETE FROM chefs WHERE id_chefs=?';
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute() === TRUE) {
          echo "Chef Deleted successfully!!";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

?>

<a href="/chefs.php">GO BACK</a>