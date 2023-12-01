<?php
//creating a database connection using the PDO (PHP Data Objects) extension

$dsn = "mysql:host=localhost;dbname=web_dev";// defines the Data Source Name (DSN) string.
$dbusername = "root";
$dbpassword = "";

// try and catch used for error handling
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword); //creates a new PDO object, which represents a connection to the database.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //sets an attribute of the PDO object. It sets the error handling mode to throw exceptions when errors occur

} catch (PDOException $e) { //PDOException is an exception specific to database operations
    echo "Connection failed: " . $e->getMessage(); //caught exception object is stored in the variable $e

    /*
        ATTR_ERRMODE = attribute that controls the error reporting mode. It specifies how PDO should behave when it encounters errors.
        ERRMODE_EXCEPTION =  if there's an issue with the database connection or any subsequent queries, it will throw a PDOException.
    */
}

