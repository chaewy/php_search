<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $usersearch = $_POST['usersearch'];

    try{
        require_once "includes/dbh.inc.php"; 

        $query = "SELECT * FROM car WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query); 

        $stmt->bindParam(":usersearch", $usersearch);
        
        $stmt->execute(); 

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

        $pdo = null; 
        $stmt = null; 

    }catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

    if(empty($usersearch)){
        header("Location: http://localhost/php_learning/");
    }


}else{
    header("Location: http://localhost/php_learning/");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <h3>Search result</h3>

    <?php


    if (empty($result)){
        echo "<div>";
        echo "<p>There were no results!</p>";
        echo "<div>";
    }
    else{
        foreach($result as $row){
            echo "<div class='result-item'>";
            echo "<h4 class='username'>" . htmlspecialchars($row['username']) . "</h4>";
            echo "<h4 class='car-name'>" . htmlspecialchars($row['car_name']) . "</h4>";
            echo "<h4 class='car-price'>" . htmlspecialchars($row['car_price']) . "</h4>";
            echo "</div>";
        }
    }
    ?>

</body>
</html>