<?php
//https://www.techiediaries.com/php-pdo-mysqli-create-mysql-database-table/
//http://jagocoding.com/tutorial/844/Insert_Data_dengan_PDO_PHP_Data_Objek
//https://www.w3schools.com/php/php_mysql_insert.asp
//https://www.mysqltutorial.org/php-querying-data-from-mysql-table/
$server = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "food";

try {
    $connection = new PDO("mysql:host=$server;dbname=$dbname", $dbuser, $dbpassword);


    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlQuery = "SELECT * FROM contacts";

    $q = $connection->query($sqlQuery);
	$q->setFetchMode(PDO::FETCH_ASSOC);
	
    echo "Select successfully!<br/>";
    }
catch(PDOException $e){
    echo $sqlQuery . "<br>" . $e->getMessage();
}
while ($row = $q->fetch()):
	echo $row['email'];
	echo '<br/>';
endwhile;

$connection = null;
?>