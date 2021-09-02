<?php

include 'classes/db.php';




echo "
    <h1>Film reservation form-Sakila</h1>
    
    <section>    
    <form method= 'post' action='validate.php'>
        <div id='reservation'>
            <fieldset>
                <legend>Booking form</legend>

                    <p>
                        <label for='title'>Movie title :</label> <br />
                        <input type='text' name='title'  size='30' required />
                    </p>
                    <p>
                        <label for='Nom'>The expected rental period:</label> <br />
                                <select name='jour' id='jour'>
                                    <option value=01>01</option>
                                    <option value='02'>02</option>
                                    <option value='02'>03</option>
                                    <option value='02'>04</option>
                                    <option value='02'>05</option>
                                    <option value='02'>06</option>
                                    <option value='02'>07</option>
                                </select>
                    </p>
                    <p>
                        <label for='Nom'>Reservation date:</label> <br />
                            <select name='jour' id='jour'>
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
                        <label for='First-name'>First-name* :</label> <br />
                        <input type='text' name='Nom' id='Nom' size='30' required />
                    </p>
                    <p>
                        <label for='Last-name'>Last-name :</label> <br />
                        <input type='text' name='Prenom' id='Prenom' size='30' required />
                    </p>
                    <p>
                        <label for='Adresse'>Address* :</label> <br />
                        <textarea name='Adresse' id='Adresse' rows='3' cols='25' required ></textarea>
                    </p>
                    <p>
                        <label for='Postal code'>Postal code* :</label> <br />
                        <input type='text' name='Code_postal' id='Code_postal' size='15' required />
                    </p>
                    <p>
                        <label for='City'>City* :</label> <br />
                        <input type='text' name='Ville' id='Ville' size='25' required />
                    </p>
                    <p>
                        <label for='E_mail'>E-mail* :</label> <br />
                        <input type='E_mail' name='E_mail' id='E_mail' size='40' required />
                    </p>
                    <p>
                        <label for='Telephone'>Telephone* :</label> <br />
                        <input type='tel' name='Telephone' id='Telephone' placeholder='00 00 00 00 00' size='20' required />
                    </p>
            </fieldset>
        </div>
        <input type='submit' value='Valid' />
    </form>      
</section>


";








