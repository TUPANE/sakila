<?php

class Database { 
    public $servername = 'localhost';
    public $bdd = 'sakila';
    public $username = 'root';
    public $password = '';

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

    public function prepare($aQuery)
    {
       if( $this->connection == null )
         $this->connect();

       return $this->connection->prepare($aQuery);
    }
    
}

         