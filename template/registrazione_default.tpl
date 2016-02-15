<!DOCTYPE html>
<html>

    <div class="container_log">

        

        {if $errore!=NULL}
            <p>{$errore}</p>
        {/if}

        {if !$logged}
            <h1>Login</h1>
            <div class="loginform">

                <form method="post" action="index.php">

                    <input type="hidden" name="controller" value="registrazione"/>
                    <input type="hidden" name="task" value="autentica"/>

                    <fieldset>

                        <p>
                            <label for="numero_tel" class="loginform_label" >Numero di telefono:</label>
                            <input type="text" name="numero_tel" id="numero_tel" tabindex="1" class="field" value="3471173932"/>
                        </p>

                        <p>
                            <label for="password" class="loginform_label">Password:</label>
                            <input type="password" name="password" id="password" tabindex="1" class="field"/>
                        </p>

                        <p>
                            <button type="submit">Login</button>
                        </p>

                    </fieldset>
                </form>
            </div>
        {else} 
            <div class="loginform">
                <p>Ciao {$numero_utente}</p>
                <p>Hai tot elementi nel carrello</p>
                
            <form method="get" action="index.php">
                
                <input type="hidden" name="controller" value="registrazione"/>
                <input type="hidden" name="task" value="logout"/>
                <button type="submit">Logout</button>
                    
            </form>
            </div>
        {/if}
        

    </div>

</html>