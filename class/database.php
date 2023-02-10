<?php

class Database{
    private $host = 'localhost';
    private $database = 'u237957316_ccsdeanslist';
    private $username = 'u237957316_ccsdeanslist';
    private $password = 'Celebis1*';
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