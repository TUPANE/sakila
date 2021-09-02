<?php
// ci-dessous requête de formulaire de reservation faite par un personnel de SAKILA
class Film { 
    public $title;
    public $rental_duration;

    public $connection = null;

    private function connect()
    {
       $this->connection = new form( $this->user_name, $this->user_pass);
    }
}