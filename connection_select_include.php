<?php
//https://www.cloudways.com/blog/introduction-php-data-objects/
include_once 'connection.php';
try
{
    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * FROM student " ;
    foreach ($db->query($sql) as $row) {
    echo " ID: ".$row['ID'] . "<br>";
    echo " Name: ".$row['name'] . "<br>";
    echo " Last Name: ".$row['last_name'] . "<br>";
    echo " Email: ".$row['email'] . "<br>";
    }
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>