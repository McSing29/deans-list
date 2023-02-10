<?php

class Database{
    private $host = 'localhost';
    private $database = 'u237957316_ccsdeanlist';
    private $username = 'u237957316_ccsdeanlist';
    private $password = '4@q6ARpX*';
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