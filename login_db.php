<?php
    $username = $_POST["uname"];
    $password = $_POST["pw"];
    $db = mysqli_connect(localhost,$username,$password,db_name); //enter database details
    if($db === false){
       header('Location : index.html?error = Enter correct username and password.');
    }
    else{
        header(' Location: test.php');
    }
?>