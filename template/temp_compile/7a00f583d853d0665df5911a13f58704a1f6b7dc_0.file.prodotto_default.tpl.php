<?php /* Smarty version 3.1.27, created on 2016-02-08 03:25:19
         compiled from "template\prodotto_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:67156b7fc8f50b043_61428093%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a00f583d853d0665df5911a13f58704a1f6b7dc' => 
    array (
      0 => 'template\\prodotto_default.tpl',
      1 => 1454898316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67156b7fc8f50b043_61428093',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b7fc8f57f9d9_48048759',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b7fc8f57f9d9_48048759')) {
function content_56b7fc8f57f9d9_48048759 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\EatOnline\\smarty\\plugins\\modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '67156b7fc8f50b043_61428093';
?>
<div class="prodotto item">
    <p id="nome"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getNome();?>
</p>
    <p>
        <img id="foto" src="template/img/prodotti/<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getImmagine();?>
"/>
    </p>
    <p id="ingredienti"><b>Ingredienti:</b> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['prodotto']->value->getIngredienti(),100," [...]");?>
</p>
    <p id="prezzo"><b>Prezzo:</b> <?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getPrezzo();?>
 &euro;</p>
    <a href="index.php?controller=ordina&task=acquista"><img id="carrello" src="template/img/carrello.png" /></a>
</div>
<?php }
}
?>