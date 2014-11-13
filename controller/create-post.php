<?php
 //*  two variables that submit data
//* filter validates sanitizes t make sure there are no mailicios things
  require_once(__DIR__ . "/../model/database.php");

  $connection = new mysqli($host, $username, $password, $database);

  $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
  $post = filter_input(INPUT_POST,"post", FILTER_SANITIZE_STRING );
// add new records into your MYSQLtable
  $query = $connection->query("INSERT INTO  posts SET title = '$title', post = '$post'");

   if ($query) {
    echo "<p>Successfully inserted post: $title</p>";   	
   } else {
   	   echo "<p>$connection->error</p>";
   }
   
   
   echo "<p>Title: $title</p>";
   echo "<p>Post: $post</p>";

   $connection->close();