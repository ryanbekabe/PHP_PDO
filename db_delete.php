<?php
//https://www.techiediaries.com/php-pdo-mysqli-create-mysql-database-table/
//http://jagocoding.com/tutorial/844/Insert_Data_dengan_PDO_PHP_Data_Objek
//https://www.w3schools.com/php/php_mysql_insert.asp
//https://www.mysqltutorial.org/php-querying-data-from-mysql-table
//https://www.w3schools.com/php/php_mysql_update.asp
//https://www.w3schools.com/php/php_mysql_delete.asp
$server = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "food";

try {
    $connection = new PDO("mysql:host=$server;dbname=$dbname", $dbuser, $dbpassword);


    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlQuery = "DELETE FROM contacts WHERE id=2";

    $connection->exec($sqlQuery);
    echo "Delete successfully!<br/>";
    }
catch(PDOException $e){
    echo $sqlQuery . "<br>" . $e->getMessage();
}

$connection = null;
?>