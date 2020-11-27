

<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 


        $ingd=$_POST["ingdn"];
        $ingdq=$_POST["ingd-q"];
        
        $sql = 'UPDATE ingredients SET quantity=? WHERE ingd_name=?;';
        
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("is", $ingdq, $ingd);
        
        if ($stmt->execute() === TRUE) {
          echo "Ingredient Updated successfully!!";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

?>

<a href="ingredients.php">GO BACK</a>