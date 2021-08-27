<?php
   
require 'classes/db.php';
   
$laBase = new Database;

$result = $laBase->query('SELECT * FROM sakila.film');

foreach( $result->fetch_all(MYSQLI_ASSOC) as $obj)
{
   echo "<div style='color:blue' class='container'>
   <label>".$obj["title"] ."</label>
   <p>". $obj["description"] ."</p>
  </div>";
}

