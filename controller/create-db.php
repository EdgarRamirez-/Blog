<?php
    require_once(__DIR__ . "/../model/config.php");

    $connection = new mysqli($host, $username, $password);

    if($connection->connect_error) {
    	die("<p>Error: " . $connection->connect_error . "</p>");
    }

       $exists = $connection->select_db($database);
     
if(!$exists) {
    $query = $connection->query("CREATE DATABASE $database");
   
if($query) {
    echo "<p>Successfully created database: " . $database . "</p>";
}
}
   else {
   	echo "<p>Database already exists</p>";
//*enables us to run this file and only create the database once.
}

 $query = $connection->query("CREATE TABLE posts ("
 	. "id int(11) NOT NULL AUTO_INCREMENT,"
 	. "title varchar(255) NOT NULL,"
 	. "post text NOT NULL,"
 	. "PRIMARY KEY (id))");

 if($query) {
 	echo "<p>successfully created table posts</p>";
 }

 else {

 echo "<p>$connection->error</p>";
}
  $connection->close();

     ?>
    






