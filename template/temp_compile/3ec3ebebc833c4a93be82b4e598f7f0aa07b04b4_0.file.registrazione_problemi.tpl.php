<?php /* Smarty version 3.1.27, created on 2016-01-02 13:08:51
         compiled from "template\registrazione_problemi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:215455687bdd3ecbbc4_12156671%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ec3ebebc833c4a93be82b4e598f7f0aa07b04b4' => 
    array (
      0 => 'template\\registrazione_problemi.tpl',
      1 => 1451735766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215455687bdd3ecbbc4_12156671',
  'variables' => 
  array (
    'errore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5687bdd3f2e603_24347859',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5687bdd3f2e603_24347859')) {
function content_5687bdd3f2e603_24347859 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '215455687bdd3ecbbc4_12156671';
?>
<h1 class="noicon">Problemi di Registrazione</h1>
<h2 class="noicon"><?php echo $_smarty_tpl->tpl_vars['errore']->value;?>
</h2><?php }
}
?>