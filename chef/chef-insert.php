<?php  include_once('C:\laragon\www\dbmspr\db-conn.php');   

        $name=$_POST["name"];
        $phone=$_POST["p-no"];
        $add=$_POST["add"];
        $pos=$_POST["pos"];
        $sql = 'INSERT INTO chefs (`name`, phone_no, `address`, position) VALUES (?, ?, ?, ?);';
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $phone, $add,  $pos);
        if ($stmt->execute() === TRUE) {
          echo "New chef record created successfully!!";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

?>
<a href="/chefs.php">go back</a>