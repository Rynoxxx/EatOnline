<?php /* Smarty version 3.1.27, created on 2016-02-11 22:11:00
         compiled from "template/prodotto_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:83066563456bcf8e4f1e129_53143514%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3250e5dcc2e3dfe0be9cabe79e2cdd2c3de9dcc' => 
    array (
      0 => 'template/prodotto_default.tpl',
      1 => 1455225033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83066563456bcf8e4f1e129_53143514',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56bcf8e4f30701_59163127',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56bcf8e4f30701_59163127')) {
function content_56bcf8e4f30701_59163127 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/daniele/work/workspace_web/rino/EatOnline/smarty/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '83066563456bcf8e4f1e129_53143514';
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
    <!--<a  href="index.php?controller=carrello&task=aggiungi.<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
"></a>-->
    <img onclick="addItem(<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
)" class="carrello" src="template/img/carrello.png"/>
</div>
<?php }
}
?>