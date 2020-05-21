<?php
//https://www.cloudways.com/blog/introduction-php-data-objects/
include_once 'connection.php';
try
{
     $database = new Connection();
     $db = $database->openConnection();
     $sql = "UPDATE `student` SET `name`= 'yourname' , `last_name` = 'your lastname' , `email` = 'bekabeipa@gmail.com' WHERE `id` = 1" ;
     $affectedrows  = $db->exec($sql);
   if(isset($affectedrows))
    {
       echo "Record has been successfully updated";
    }          
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>