<div class="contactform">
    <form method="POST" action="index.php">

        <input type="hidden" name="controller" value="registrazione"/>
        <input type="hidden" name="task" value="attivazione"/>

        <fieldset>

            <label>Attivazione</label>

            <p>
                <label for="numero_tel" class="left">Telefono:</label>
                <input type="text" name="numero_tel" id="numero_tel" class="field"/>
            </p>

            <p>
                <label for="codice_attivazione" class="left">Codice di attivazione:</label>
                <input type="text" name="codice_attivazione" id="codice_attivazione" class="field"/>
            </p>

        </fieldset>

    </form>
</div> 