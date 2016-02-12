<?php /* Smarty version 3.1.27, created on 2016-02-11 22:53:46
         compiled from "template\prodotto_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2651956bd02ea7ecdd1_35759207%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a00f583d853d0665df5911a13f58704a1f6b7dc' => 
    array (
      0 => 'template\\prodotto_default.tpl',
      1 => 1455227612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2651956bd02ea7ecdd1_35759207',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56bd02ea860724_25798009',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56bd02ea860724_25798009')) {
function content_56bd02ea860724_25798009 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\EatOnline\\smarty\\plugins\\modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '2651956bd02ea7ecdd1_35759207';
?>
<div id="item-<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
" class="prodotto item">
    <p class="nome"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getNome();?>
</p>
    <p>
        <img class="foto" src="template/img/prodotti/<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getImmagine();?>
"/>
    </p>
    <p class="ingredienti"><b>Ingredienti:</b> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['prodotto']->value->getIngredienti(),100," [...]");?>
</p>
    <p class="prezzo"><b>Prezzo:</b> <?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getPrezzo();?>
 &euro;</p>
    <img onclick="addItem(<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
)" class="carrello" src="template/img/carrello.png"/>
</div>
<?php }
}
?>