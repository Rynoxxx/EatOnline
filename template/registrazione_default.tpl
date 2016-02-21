<html>

    <div class="container_side_items">

        {if !$logged}
            <img class ="img_side_content" src="template/img/login.png"/>
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

                <div class="log_error">
                    {if $errore.login!=NULL}
                        <p>{$errore.login}</p>
                    {/if}
                </div>

            </div>
        {else}
            <img class ="img_side_content" src="template/img/login.png"/>
            <h1>Area Utente</h1>
            <div class="loginform">
                <div class="infoUtente">
                    <p>Nome: {$utente.nome}</p>
                    <p>Cognome: {$utente.cognome}</p>
                    <p>Tipo Utente: {$utente.tipo_utente}</p>
                </div>
                <form method="get" action="index.php">

                    <input type="hidden" name="controller" value="registrazione"/>
                    <input type="hidden" name="task" value="logout"/>
                    <button type="submit">Logout</button>

                </form>
            </div>
        {/if}

        {if $admin}
            <div class="admin">
                <h2>Opzioni Amministratore</h2>
                <a href="index.php?controller=prodotto&task=all">Gestione Prodotti</a>
            </div>
        {/if}

    </div>

</html>
