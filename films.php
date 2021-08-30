<?php
   
require 'classes/db.php';
   
$laBase = new Database;

$result = $laBase->query('SELECT title, description, rental_date, return_date FROM sakila.film, sakila.rental LIMIT 1000');

$disp =  'return_date';
 if ($disp!= 'return_date') 
 {
    echo "oui";
 }



echo "
  <h1 class='text-center'>LISTES DES FILMS CHEZ SAKILA </h1>
<table border=2>
  <thead>
      <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Rental_date</th>
          <th>Return_date</th>
          <th>Disponibility</th>

                 
      </tr>
  </thead>
";

foreach( $result->fetch_all(MYSQLI_ASSOC) as $obj)
{
   echo "
          <tbody>
              <tr>
                <td>".$obj["title"]."</td>  
                <td>".$obj["description"]."</td>
                <td>".$obj["rental_date"]."</td>
                <td>".$obj["return_date"]."</td>
                
              </tr>
          </tbody>
  ";
}

echo "
</table> 
";
