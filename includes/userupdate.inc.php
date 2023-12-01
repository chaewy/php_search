<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['name'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try{
        require_once "dbh.inc.php";

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 1 ;";//id patutnya based on session

        $stmt = $pdo->prepare($query); 

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);
        
        $stmt->execute(); 

        $pdo = null; 
        $stmt = null; 

        header("Location: http://localhost/php_learning/"); 

   
    }catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

    if(empty($name)){
        header("Location: http://localhost/php_learning/");
    }


}else{
    header("Location: http://localhost/php_learning/");
}

