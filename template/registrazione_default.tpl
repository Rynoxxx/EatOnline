<!DOCTYPE html>
<html>

    <div class="subcontent-box">

        

        {if $errore!=NULL}
            <p>{$errore}</p>
        {/if}

        {if !$logged}
            <h1 class="login">Login</h1>
            <div class="loginform">

                <form method="post" action="index.php">

                    <input type="hidden" name="controller" value="registrazione"/>
                    <input type="hidden" name="task" value="autentica"/>

                    <fieldset>

                        <p>
                            <label for="username" class="top" >Numero di telefono:</label>
                            <input type="text" name="numero_tel" id="numero_tel" tabindex="1" class="field" value="3899365280"/>
                        </p>

                        <p>
                            <label for="password" class="top">Password:</label>
                            <input type="password" name="password" id="password" tabindex="1" class="field"/>
                        </p>

                        <p>
                            <button type="submit">Login</button>
                        </p>

                    </fieldset>
                </form>
            </div>
        {else} 
            <form method="get" action="index.php">
                
                <input type="hidden" name="controller" value="registrazione"/>
                <input type="hidden" name="task" value="logout"/>
                <button type="submit">Logout</button>
                    
            </form>
        {/if}
        

    </div>

</html>