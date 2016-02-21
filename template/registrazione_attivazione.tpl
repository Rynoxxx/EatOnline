<div class="contactform">
    <h1>Attivazione</h1>
    <form method="post" action="index.php">

        <input type="hidden" name="controller" value="registrazione"/>
        <input type="hidden" name="task" value="attivazione"/>

        <fieldset>

            <legend>&nbsp;Convalida il tuo account&nbsp;</legend>

            <label for="numero_tel" class="label_form_reg">Telefono:</label>
            <input type="text" name="numero_tel" id="numero_tel" class="field"/>
            
            <label for="codice_attivazione" class="label_form_reg">Codice di attivazione:</label>
            <input type="text" name="codice_attivazione" id="codice_attivazione" class="field"/>
            
        </fieldset>
        
        <p><button type="submit" name="submit" class="form_button">Attivati</button></p>

    </form>
</div> 