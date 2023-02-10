<?php

class Database{
    private $host = 'localhost';
    private $username = 'u237957316_ccsdeanlist';
    private $database = 'u237957316_ccsdeanlist';
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