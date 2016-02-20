<?php /* Smarty version 3.1.27, created on 2016-02-20 01:06:38
         compiled from "template\registrazione_problemi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2542056c7ae0eef7e87_51960217%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ec3ebebc833c4a93be82b4e598f7f0aa07b04b4' => 
    array (
      0 => 'template\\registrazione_problemi.tpl',
      1 => 1455227061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2542056c7ae0eef7e87_51960217',
  'variables' => 
  array (
    'errore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c7ae0f014cf0_30963803',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c7ae0f014cf0_30963803')) {
function content_56c7ae0f014cf0_30963803 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2542056c7ae0eef7e87_51960217';
?>
<h1 class="noicon">Problemi di Registrazione</h1>
<h2 class="noicon"><?php echo $_smarty_tpl->tpl_vars['errore']->value;?>
</h2><?php }
}
?>