<?php

class Database{
    private $host = 'localhost';
    private $database = 'u237957316_deanlist';
    private $username = 'u237957316_deanlist';
    private $password = 'U=lGFvA2ii3';
    protected $connection;

    function connect(){
        try 
			{
				$this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", 
											$this->username, $this->password);
			} 
			catch (PDOException $e) 
			{
				echo "Connection error " . $e->getMessage();
			}
        return $this->connection;
    }

}

?>