<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 


        $ingd=$_POST["ingd"];
        
        $sql = 'select * from ingredients
        where ingd_name=?;';
        
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("s", $ingd);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc(); // get the mysqli result
        echo $result["id_ingredients"];
        echo $result["ingd_name"];
        echo $result["quantity"];
        echo $result["expiry"];
        

?>

<a href="ingredients.php">GO BACK</a>