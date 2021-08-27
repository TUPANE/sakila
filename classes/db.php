<?php

class Database { 
    private $servername = 'localhost';
    private $bdd = 'sakila';
    private $username = 'root';
    private $password = '';

    public $connection = null;

    private function connect()
    {
       $this->connection = new mysqli($this->servername, $this->username, $this->password);
    }

    public function query($aQuery)
    {
       if( $this->connection == null )
         $this->connect();

       return $this->connection->query($aQuery);
    }
}
            