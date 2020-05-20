<?php
//https://www.techiediaries.com/php-pdo-mysqli-create-mysql-database-table/
//http://jagocoding.com/tutorial/844/Insert_Data_dengan_PDO_PHP_Data_Objek
//https://www.w3schools.com/php/php_mysql_insert.asp
$server = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "food";

try {
    $connection = new PDO("mysql:host=$server;dbname=$dbname", $dbuser, $dbpassword);


    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlQuery = "INSERT INTO contacts (firstName, lastName, email) VALUES ('Adas', 'Idis', 'as@a.a')";

    $connection->exec($sqlQuery);

    echo "Insert successfully!";
    }
catch(PDOException $e){
    echo $sqlQuery . "<br>" . $e->getMessage();
}

$connection = null;
?>