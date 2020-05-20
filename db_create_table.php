<?php
//https://www.techiediaries.com/php-pdo-mysqli-create-mysql-database-table/
$server = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "food";

try {
    $connection = new PDO("mysql:host=$server;dbname=$dbname", $dbuser, $dbpassword);


    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlQuery = "CREATE TABLE contacts (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstName VARCHAR(35) NOT NULL,
        lastName VARCHAR(35) NOT NULL,
        email VARCHAR(55)
    )";

    $connection->exec($sqlQuery);

    echo "Table created successfully!";
    }
catch(PDOException $e){
    echo $sqlQuery . "<br>" . $e->getMessage();
}

$connection = null;
?>