<?php /* Smarty version 3.1.27, created on 2016-02-09 13:39:20
         compiled from "template\registrazione_modulo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:523256b9ddf8c64608_93285643%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd72a6e99d7996907ce94b026c610cc460d35c5' => 
    array (
      0 => 'template\\registrazione_modulo.tpl',
      1 => 1455021557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '523256b9ddf8c64608_93285643',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b9ddf8cba6b4_69454030',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b9ddf8cba6b4_69454030')) {
function content_56b9ddf8cba6b4_69454030 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '523256b9ddf8c64608_93285643';
?>
<html>

    <h1>Modulo di registrazione</h1>
    <div class="contactform">
        
        <form method="post" action="index.php">
            
            <input type="hidden" name="controller" value="registrazione"/>
            <input type="hidden" name="task" value="salva"/>
            
            <fieldset>
                <legend>&nbsp;Credenziali di accesso&nbsp;</legend>
                <p>
                    <label for="numero_tel" class="left">Telefono:</label>
                    <input type="text" name="numero_tel" id="numero_tel" class="field" value="3471173932"/>
                </p>
                <p>
                    <label for="password" class="left">Password:</label>
                    <input type="password" name="password" id="password" class="field" value="bbb"/>
                </p>
                <p>
                    <label for="password_1" class="left">Ripeti Password:</label>
                    <input type="password" name="password_1" id="password_1" class="field" value="bbb"/>
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