<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['name'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try{
        require_once "dbh.inc.php"; // includes the contents of the "dbh.inc.php" file that is database connection

        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);"; //defines an SQL query string for inserting data into the "users" table. yang values to ade byk method

        $stmt = $pdo->prepare($query); //prepares the SQL query for execution. It creates a PDOStatement object ($stmt) / prevent SQL injection

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);
        
        $stmt->execute(); 

        $pdo = null; //close the database connection. not necessary lah
        $stmt = null; //same like above

        header("Location: http://localhost/php_learning/"); //bawak balik pegi home page/login page kut

    //below ah catches any exceptions that may have occurred during the execution
    //contohnya failed database connection or an issue with the SQL query
    }catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());//output an error message using die()
    }

    if(empty($username)){
        header("Location: http://localhost/php_learning/");
    }


}else{
    header("Location: http://localhost/php_learning/");
}

