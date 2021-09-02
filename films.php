<?php
   
require 'classes/db.php';
   
$laBase = new Database;

$result = $laBase->query('SELECT title, description, (select return_date from sakila.rental where film_id = inventory_id order by rental_date desc limit 1)
                         as return_date FROM
                        sakila.film
                        ;');



echo "
  <h1>List of films-SAKILA</h1>
  <label for=site-search>Search:</label>
  <input type=search id=site-search 
       aria-label=Search through site content>

<button>Ok</button><br><br>

<table border=2>
  <thead>
      <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Return_date</th>
          <th></th>

          
                         
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
                <td>".$obj["return_date"]." </td>
                <td><button href='reserv.php'>Reserve</button> <button>Amended</button></td>
           
              </tr>
          </tbody>
  ";
}

echo "
</table> 
";
