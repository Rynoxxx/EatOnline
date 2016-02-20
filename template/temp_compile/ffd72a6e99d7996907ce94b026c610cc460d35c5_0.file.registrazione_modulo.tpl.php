<?php /* Smarty version 3.1.27, created on 2016-02-20 15:30:08
         compiled from "template\registrazione_modulo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1801956c87870855865_81966166%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd72a6e99d7996907ce94b026c610cc460d35c5' => 
    array (
      0 => 'template\\registrazione_modulo.tpl',
      1 => 1455978605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1801956c87870855865_81966166',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c878708a3659_86169404',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c878708a3659_86169404')) {
function content_56c878708a3659_86169404 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1801956c87870855865_81966166';
?>
<html>

    <head>
        <?php echo '<script'; ?>
 src="js/validation_reg.js"><?php echo '</script'; ?>
>
    </head>

    <div class="contactform">
        <h1>Modulo di registrazione</h1>

        <form id="form_reg" method="post" action="index.php">

            <input type="hidden" name="controller" value="registrazione"/>
            <input type="hidden" name="task" value="salva"/>

            <fieldset>
                <legend>&nbsp;Credenziali di accesso&nbsp;</legend>
                
                    <label for="numero_tel" class="label_form_reg">Telefono:</label>
                    <input type="text" name="numero_tel" id="numero_tel" class="field"/>
                
                    <label for="password" class="label_form_reg">Password:</label>
                    <input type="password" name="password" id="password" class="field"/>
               
                    <label for="password_1" class="label_form_reg">Ripeti Password:</label>
                    <input type="password" name="password_1" id="password_1" class="field"/>
                
            </fieldset>

            <fieldset>
                <legend>&nbsp;Dati anagrafici&nbsp;</legend>
                
                    <label for="nome" class="label_form_reg">Nome:</label>
                    <input type="text" name="nome" id="nome" class="field"/>
                
                    <label for="cognome" class="label_form_reg">Cognome:</label>
                    <input type="text" name="cognome" id="cognome" class="field"/>
               
                    <label for="via" class="label_form_reg">Via:</label>
                    <input type="text" name="via" id="via" class="field"/>
               
                    <label for="citta" class="label_form_reg">Citt&agrave;:</label>
                    <input type="text" name="citta" id="citta" class="field"/>
               
                    <label for="cap" class="label_form_reg">CAP:</label>
                    <input type="text" name="cap" id="cap" class="field"/>
               
                    <label for="email" class="label_form_reg">Email:</label>
                    <input type="text" name="email" id="email" class="field"/>
                
            </fieldset>

            <p><button type="submit" name="submit" id="submit_reg" class="form_button">Registrati</button></p>

        </form>

    </div>

</html>
<?php }
}
?>