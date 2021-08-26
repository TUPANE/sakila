<?php
   require 'classes/connection.php';
    

$film = new DB ();
$results = $film->query('SELECT * FROM sakila.film');

while($obj = $results->fetch_object()){
   echo "<div style='color:blue' class='container'>
   <label>".$obj->title ."</label>
   <p>". $obj->description ."</p>
  </div>";
}
?>