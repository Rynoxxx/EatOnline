<?php /* Smarty version 3.1.27, created on 2016-02-18 01:26:47
         compiled from "template/prodotto_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:159097918156c50fc7a2e4b4_01182716%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3250e5dcc2e3dfe0be9cabe79e2cdd2c3de9dcc' => 
    array (
      0 => 'template/prodotto_default.tpl',
      1 => 1455755205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159097918156c50fc7a2e4b4_01182716',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c50fc7a3fc06_87231198',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c50fc7a3fc06_87231198')) {
function content_56c50fc7a3fc06_87231198 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/daniele/work/workspace_web/rino/EatOnline/smarty/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '159097918156c50fc7a2e4b4_01182716';
?>
<div id="item-<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
" class="prodotto item">
  <div class="foto-container">
  <img class="foto" src="template/img/prodotti/<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getImmagine();?>
" />
</div>
  <p class="nome"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getNome();?>
</p>
  <p class="ingredienti"><b>Ingredienti:</b> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['prodotto']->value->getIngredienti(),100," [...]");?>
</p>
  <p class="prezzo"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getPrezzo();?>
 &euro;</p>
  <img onclick="addItem(<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
)" class="carrello" src="template/img/carrello.png" />
</div>
<?php }
}
?>