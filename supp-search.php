<?php  include_once('C:\laragon\www\dbmspr\db-conn.php'); 


        $ingd=$_POST["ingd"];
        
        $sql = 'SELECT ingredients.id_ingredients, ingredients.ingd_name, ingredients.quantity, ingredients.expiry, supplier. id_supplier, supplier.sup_name, supplier.sup_phone, supplier.sup_address FROM supplier
        INNER JOIN ingredients
        ON supplier.id_supplier=ingredients.sup_id
        WHERE ingredients.ingd_name=?;';
        
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("s", $ingd);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc(); // get the mysqli result
        echo $result["id_supplier"];
        echo $result["sup_name"];
        echo $result["sup_phone"];
        echo $result["sup_address"];
        

?>

<a href="/supplier.php">GO BACK</a>