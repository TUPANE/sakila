<?php
   
require 'classes/db.php';
   
$laBase = new  Database;

echo $laBase->bdd;

/*
$film = new DB ();
$results = $film->query('SELECT * FROM sakila.film');

while($obj = $results->fetch_object()){
   echo "<div style='color:blue' class='container'>
   <label>".$obj->title ."</label>
   <p>". $obj->description ."</p>
  </div>";
}

*/