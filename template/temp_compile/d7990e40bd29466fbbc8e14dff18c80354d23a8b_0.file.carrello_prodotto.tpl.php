<?php /* Smarty version 3.1.27, created on 2016-02-11 00:47:03
         compiled from "template/carrello_prodotto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:117015245656bbcbf7d1d0e9_59149431%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7990e40bd29466fbbc8e14dff18c80354d23a8b' => 
    array (
      0 => 'template/carrello_prodotto.tpl',
      1 => 1455148021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117015245656bbcbf7d1d0e9_59149431',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56bbcbf7d2b8a2_77127680',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56bbcbf7d2b8a2_77127680')) {
function content_56bbcbf7d2b8a2_77127680 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '117015245656bbcbf7d1d0e9_59149431';
?>
<tr id="prodotto-<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
" class="prodotto item">
  <td class="nome"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getNome();?>
</td>
  <td class="image">
    <img id="foto" src="template/img/prodotti/<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getImmagine();?>
" />
  </td>
  <td class="prezzo"><b>Prezzo:</b> <?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getPrezzo();?>
 &euro;</td>
  <td class="quantita"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->_quantita;?>
</td>
  <td class="buttons">
    <a  onclick="addProdotto(<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
)" class="inc-button">+</a>
    <a  onclick="removeProdotto(<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
)" class="inc-button">-</a>
  </td>
</tr>
<?php }
}
?>