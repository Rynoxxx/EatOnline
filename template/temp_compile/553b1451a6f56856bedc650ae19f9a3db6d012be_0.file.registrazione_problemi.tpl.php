<?php /* Smarty version 3.1.27, created on 2016-02-09 22:48:57
         compiled from "template/registrazione_problemi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:101644356556ba5ec93c2d47_78200360%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553b1451a6f56856bedc650ae19f9a3db6d012be' => 
    array (
      0 => 'template/registrazione_problemi.tpl',
      1 => 1451849155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101644356556ba5ec93c2d47_78200360',
  'variables' => 
  array (
    'errore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ba5ec93c8d05_32937972',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ba5ec93c8d05_32937972')) {
function content_56ba5ec93c8d05_32937972 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101644356556ba5ec93c2d47_78200360';
?>
<h1 class="noicon">Problemi di Registrazione</h1>
<h2 class="noicon"><?php echo $_smarty_tpl->tpl_vars['errore']->value;?>
</h2><?php }
}
?>