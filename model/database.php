<?php
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

    public function__construct ($host, $username, $password, $database) {
          $this->host = $host;
          $this->username = $username;
          $this->password = $password;
          $this->database = $database;
    }
   
    public function openConnection() {

    }
    
    public function closeConnection() {

    }
   
    public function query($string) {

    }
 }
//* The constructor is called on an object after it has been created,
//* and is a good place to put initialisation code.