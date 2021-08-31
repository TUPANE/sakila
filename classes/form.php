<?php
// ci-dessous sera un formulaire de reservation faite par un personnel de SAKILA
class Film { 
    public $user_name;
    public $user_pass;

    public $connection = null;

    private function connect()
    {
       $this->connection = new form( $this->user_name, $this->user_pass);
    }
}