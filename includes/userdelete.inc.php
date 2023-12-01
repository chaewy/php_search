<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['name'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try{
        require_once "dbh.inc.php"; 

        $query = "DELETE FROM users WHERE username = :username AND  pwd = :pwd;";

        $stmt = $pdo->prepare($query); 

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        
        
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

