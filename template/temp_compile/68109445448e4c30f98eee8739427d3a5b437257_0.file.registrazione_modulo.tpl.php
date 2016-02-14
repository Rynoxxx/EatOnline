<?php /* Smarty version 3.1.27, created on 2016-02-14 22:36:11
         compiled from "template/registrazione_modulo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:92378047256c0f34bb33798_56584283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68109445448e4c30f98eee8739427d3a5b437257' => 
    array (
      0 => 'template/registrazione_modulo.tpl',
      1 => 1455485767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92378047256c0f34bb33798_56584283',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c0f34bb41761_91749648',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c0f34bb41761_91749648')) {
function content_56c0f34bb41761_91749648 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '92378047256c0f34bb33798_56584283';
?>
<html>

    <head>
        <?php echo '<script'; ?>
 src="js/validation_reg2.js"><?php echo '</script'; ?>
>
    </head>

    <div class="contactform">
        <h1>Modulo di registrazione</h1>

        <form id="form_reg" method="post" action="index.php">

            <input type="hidden" name="controller" value="registrazione"/>
            <input type="hidden" name="task" value="salva"/>

            <fieldset>
                <legend>&nbsp;Credenziali di accesso&nbsp;</legend>
                <p>
                    <label for="numero_tel" class="label_form_reg">Telefono:</label>
                    <input type="text" name="numero_tel" id="numero_tel" class="field"/>
                </p>
                <p>
                    <label for="password" class="label_form_reg">Password:</label>
                    <input type="password" name="password" id="password" class="field"/>
                </p>
                <p>
                    <label for="password_1" class="label_form_reg">Ripeti Password:</label>
                    <input type="password" name="password_1" id="password_1" class="field"/>
                </p>
            </fieldset>

            <fieldset>
                <legend>&nbsp;Dati anagrafici&nbsp;</legend>
                <p>
                    <label for="nome" class="label_form_reg">Nome:</label>
                    <input type="text" name="nome" id="nome" class="field"/>
                </p>
                <p>
                    <label for="cognome" class="label_form_reg">Cognome:</label>
                    <input type="text" name="cognome" id="cognome" class="field"/>
                </p>
                <p>
                    <label for="via" class="label_form_reg">Via:</label>
                    <input type="text" name="via" id="via" class="field"/>
                </p>
                <p>
                    <label for="citta" class="label_form_reg">Citt&agrave;:</label>
                    <input type="text" name="citta" id="citta" class="field"/>
                </p>
                <p>
                    <label for="cap" class="label_form_reg">CAP:</label>
                    <input type="text" name="cap" id="cap" class="field"/>
                </p>
                <p>
                    <label for="email" class="label_form_reg">Email:</label>
                    <input type="text" name="email" id="email" class="field"/>
                </p>
            </fieldset>

            <p><button type="submit" name="submit" id="submit_reg" class="form_button">Registrati</button></p>

        </form>

    </div>

</html>
<?php }
}
?>