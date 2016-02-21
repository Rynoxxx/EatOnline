<?php /* Smarty version 3.1.27, created on 2016-02-21 04:59:12
         compiled from "template\prodotto_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:701456c936104b9ad9_47204385%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a00f583d853d0665df5911a13f58704a1f6b7dc' => 
    array (
      0 => 'template\\prodotto_default.tpl',
      1 => 1456027084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '701456c936104b9ad9_47204385',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c936105393f8_90693642',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c936105393f8_90693642')) {
function content_56c936105393f8_90693642 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\EatOnline\\smarty\\plugins\\modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '701456c936104b9ad9_47204385';
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