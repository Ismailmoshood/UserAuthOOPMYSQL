<?php

class Dbh
{
   private $hostname;
   private $username;
   private $password;
   private $dbname;


 protected function connect()
   {
      $this->hostname = "localhost";
      $this->username = "root";
      $this->password = "";
      $this->dbname = "zuriphp";
         $connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
         return $connection;
        
   }
 
}



