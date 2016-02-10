<?php /* Smarty version 3.1.27, created on 2016-02-10 23:44:31
         compiled from "template\carrello_prodotto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2050756bbbd4f4bbe19_03695552%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b2ce2c3b730f6aa5b0f7180f025c87157396bb2' => 
    array (
      0 => 'template\\carrello_prodotto.tpl',
      1 => 1455129490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2050756bbbd4f4bbe19_03695552',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56bbbd4f55ea54_79852308',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56bbbd4f55ea54_79852308')) {
function content_56bbbd4f55ea54_79852308 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2050756bbbd4f4bbe19_03695552';
?>
<tr class="prodotto item">
    <td class="nome"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getNome();?>
</td>
    <td class="image">
        <img id="foto" src="template/img/prodotti/<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getImmagine();?>
"/>
    </td>
    <td class="prezzo"><b>Prezzo:</b> <?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getPrezzo();?>
 &euro;</td>
    <td class="quantita"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->_quantita;?>
</td>
    <td class="buttons"><a  href="index.php?controller=carrello&task=aggiungi.<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
" class="inc-button">+</a>
    <a  href="index.php?controller=carrello&task=elimina.<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
" class="inc-button">-</a></td>
</tr>
<?php }
}
?>