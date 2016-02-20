<?php /* Smarty version 3.1.27, created on 2016-02-20 15:30:12
         compiled from "template\registrazione_attivazione.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:348856c8787412eb55_37574415%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e9a98b342cc4e4b564a088ac5b2de1f22098fde' => 
    array (
      0 => 'template\\registrazione_attivazione.tpl',
      1 => 1455978601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '348856c8787412eb55_37574415',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c87874176332_51614836',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c87874176332_51614836')) {
function content_56c87874176332_51614836 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '348856c8787412eb55_37574415';
?>
<div class="contactform">
    <form method="post" action="index.php">

        <input type="hidden" name="controller" value="registrazione"/>
        <input type="hidden" name="task" value="attivazione"/>

        <fieldset>

            <legend>&nbsp;Attivazione&nbsp;</legend>

            <label for="numero_tel" class="left">Telefono:</label>
            <input type="text" name="numero_tel" id="numero_tel" class="field"/>
            
            <label for="codice_attivazione" class="left">Codice di attivazione:</label>
            <input type="text" name="codice_attivazione" id="codice_attivazione" class="field"/>
            
        </fieldset>

    </form>
</div> <?php }
}
?>