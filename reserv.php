<?php

include 'classes/db.php';
// ci-dessous est le formulaire de réservation de film
echo "
    <h1>Film reservation form-Sakila</h1>
    
    <section>    
    <form method= 'post' action='form.php'>
        <div id='reservation'>
            <fieldset>
                <legend>Booking form</legend>

                    <p>
                        <label for='title'>Movie title :</label> <br />
                        <input type='text' name='title'  size='30' required />
                    </p>
                    <p>
                        <label for='date'>Reservation date:</label> <br />
                            <select name='date' id='date'>
                                <option value='01'>01</option>
                                <option value='02'>02</option>
                                <option value='02'>03</option>
                                <option value='02'>04</option>
                                <option value='02'>05</option>
                                <option value='02'>06</option>
                                <option value='02'>07</option>
                            </select>
                            <select name='mois' id='mois'>
                                <option value='Janvier'>Janvier</option>
                                <option value='Fevrier'>Fevrier</option>
                                <option value='Fevrier'>Mars</option>
                                <option value='Fevrier'>Avril</option>
                                <option value='Fevrier'>Mai</option>
                            </select>
                            <select name='annee' id='annee'>
                                <option value='2013'>2021</option>
                                <option value='2014'>2022</option>
                            </select>
                    </p>       
            </fieldset>  
        </div>
        <div id='coordonnees'>
            <fieldset>
                <legend>Your coordinates</legend>
                    <p>
                        <label for='first-name'>First-name* :</label> <br />
                        <input type='text' name='first_name' id='first_name' size='30' required />
                    </p>
                    <p>
                        <label for='last-name'>Last-name :</label> <br />
                        <input type='text' name='last_name' id='last_name' size='30' required />
                    </p>
                    <p>
                    <label for='e_mail'>E-mail* :</label> <br />
                    <input type='e_mail' name='e_mail' id='e_mail' size='40' required />
                    </p>
                    <p>
                    <label for='adresse'>Address* :</label> <br />
                    <textarea name='adress' id='Adress' rows='3' cols='25' required ></textarea>
                    </p>
                    <p>
                        <label for='telephone'>Phone* :</label> <br />
                        <input type='telephone' name='telephone' id='telephone' placeholder='00 00 00 00 00' size='20' required />
                    </p>
                   
                    header('Location:validate.html');  
            </fieldset>
        </div>
        <input type='submit' value='Valid' />
    </form>      
</section>
";









