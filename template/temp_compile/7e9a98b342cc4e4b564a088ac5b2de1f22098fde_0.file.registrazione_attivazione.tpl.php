<?php /* Smarty version 3.1.27, created on 2016-02-21 19:19:47
         compiled from "template\registrazione_attivazione.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1677656c9ffc3015916_11169310%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e9a98b342cc4e4b564a088ac5b2de1f22098fde' => 
    array (
      0 => 'template\\registrazione_attivazione.tpl',
      1 => 1455997354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1677656c9ffc3015916_11169310',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c9ffc3066253_10076895',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c9ffc3066253_10076895')) {
function content_56c9ffc3066253_10076895 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1677656c9ffc3015916_11169310';
?>
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
</div> <?php }
}
?>