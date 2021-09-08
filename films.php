<?php
  // creation of a new object (1) child of the Datase class and connection to the database
require 'classes/db.php';
$laBase = new Database;

// request to the sakila database
$query = "SELECT title, description, (select return_date from sakila.rental where film_id = inventory_id order by rental_date desc limit 1)
as return_date FROM sakila.film";

// display the choice of film titles in the search bar
if (isset($_GET["title"]))
{
  $aSearch = $_GET["title"];
  $query .= " where title like '%".$aSearch."%'"; 
}

$result = $laBase->query($query);
 
// Table display
echo "<h1>Liste des films";

echo  "</h1>

<form action='films.php'>
  <label for=site-search>Search:</label>
  <input name='title' 
       aria-label=Search through site content>

  <button>Ok</button><br><br>
</form>


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

//below allows you to search in the database and display on the designer table above
foreach( $result->fetch_all(MYSQLI_ASSOC) as $obj)

{
   echo "
        
          <tbody>
              <tr>
                <td>".$obj["title"]."</td> 
                <td>".$obj["description"]."</td>
                <td>".$obj["return_date"]." </td>
                <td><button href='reserv.php' class='button'>Reserve</button> <button>Amended</button></td> 
           
              </tr>
          </tbody>
  ";
}

echo "
</table> 
";
