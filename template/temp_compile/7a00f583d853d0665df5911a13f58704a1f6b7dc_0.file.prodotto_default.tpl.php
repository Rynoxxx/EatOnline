<?php /* Smarty version 3.1.27, created on 2016-02-07 01:41:51
         compiled from "template\prodotto_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:988456b692cf0731c9_94582376%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a00f583d853d0665df5911a13f58704a1f6b7dc' => 
    array (
      0 => 'template\\prodotto_default.tpl',
      1 => 1454805591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '988456b692cf0731c9_94582376',
  'variables' => 
  array (
    'prodotti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b692cf08aed9_58213422',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b692cf08aed9_58213422')) {
function content_56b692cf08aed9_58213422 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '988456b692cf0731c9_94582376';
?>
<div class="prodotto item">
  <p id="nome"><?php echo $_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getNome();?>
</p>
  <p>
    <img id="foto" src="template/img/prodotti/primi/carbonara.jpg" />
  </p>
  <p id="ingredienti"><b>Ingredienti:</b> <?php echo $_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getIngredienti();?>
</p>
  <p id="prezzo"><b>Prezzo:</b> <?php echo $_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getPrezzo();?>
 &euro;</p>
  <img id="carrello" src="template/img/carrello.png" />
</div>
<?php }
}
?>