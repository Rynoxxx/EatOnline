<?php /* Smarty version 3.1.27, created on 2016-01-03 20:34:36
         compiled from "template\registrazione_attivazione.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17162568977cc124f87_96006829%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e9a98b342cc4e4b564a088ac5b2de1f22098fde' => 
    array (
      0 => 'template\\registrazione_attivazione.tpl',
      1 => 1451849670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17162568977cc124f87_96006829',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568977cc183d42_14416234',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568977cc183d42_14416234')) {
function content_568977cc183d42_14416234 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17162568977cc124f87_96006829';
?>
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
</div> <?php }
}
?>