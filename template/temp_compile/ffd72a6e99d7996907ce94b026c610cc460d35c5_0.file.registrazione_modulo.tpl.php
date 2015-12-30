<?php /* Smarty version 3.1.27, created on 2015-12-30 15:18:00
         compiled from "template\registrazione_modulo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:205065683e79872c060_00137609%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd72a6e99d7996907ce94b026c610cc460d35c5' => 
    array (
      0 => 'template\\registrazione_modulo.tpl',
      1 => 1451485078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205065683e79872c060_00137609',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5683e798761949_75119743',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5683e798761949_75119743')) {
function content_5683e798761949_75119743 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '205065683e79872c060_00137609';
?>
<html>

    <h1 class="contact">Modulo di registrazione</h1>
    <div class="contactform">
        
        <form method="post" action="index.php">
            
            <input type="hidden" name="controller" value="registrazione"/>
            <input type="hidden" name="task" value="salva"/>
            
            <fieldset>
                <legend>&nbsp;Credenziali di accesso&nbsp;</legend>
                <p>
                    <label for="numero" class="left">Telefono:</label>
                    <input type="text" name="numero" id="numero" class="field"/>
                </p>
                <p>
                    <label for="password" class="left">Password:</label>
                    <input type="password" name="password" id="password" class="field"/>
                </p>
                <p>
                    <label for="password_1" class="left">Ripeti Password:</label>
                    <input type="password" name="password_1" id="password_1" class="field"/>
                </p>
            </fieldset>
            
            <fieldset>
                <legend>&nbsp;Dati anagrafici&nbsp;</legend>
                <p>
                    <label for="nome" class="left">Nome:</label>
                    <input type="text" name="nome" id="nome" class="field"/>
                </p>
                <p>
                    <label for="cognome" class="left">Cognome:</label>
                    <input type="text" name="cognome" id="cognome" class="field"/>
                </p>
                <p>
                    <label for="via" class="left">Via:</label>
                    <input type="text" name="via" id="via" class="field"/>
                </p>
                <p>
                    <label for="citta" class="left">Citt&agrave;:</label>
                    <input type="text" name="citta" id="citta" class="field"/>
                </p>
                <p>
                    <label for="cap" class="left">CAP:</label>
                    <input type="text" name="cap" id="cap" class="field"/>
                </p>
                <p>
                    <label for="email" class="left">Email:</label>
                    <input type="text" name="email" id="email" class="field"/>
                </p>
            </fieldset>
            
            <p><button type="submit" name="submit" id="submit_reg" class="button">Registrati</button></p>
            
        </form>

    </div>

</html><?php }
}
?>