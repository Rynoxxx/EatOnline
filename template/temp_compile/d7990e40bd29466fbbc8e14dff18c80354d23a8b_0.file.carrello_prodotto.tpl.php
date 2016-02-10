<?php /* Smarty version 3.1.27, created on 2016-02-11 00:50:50
         compiled from "template/carrello_prodotto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:163912797156bbccdacf3678_02811707%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7990e40bd29466fbbc8e14dff18c80354d23a8b' => 
    array (
      0 => 'template/carrello_prodotto.tpl',
      1 => 1455148246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163912797156bbccdacf3678_02811707',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56bbccdad04376_12097081',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56bbccdad04376_12097081')) {
function content_56bbccdad04376_12097081 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '163912797156bbccdacf3678_02811707';
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
    <button  onclick="addProdotto(<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
)" class="inc-button">+</button>
    <button  onclick="removeProdotto(<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
)" class="inc-button">-</button>
  </td>
</tr>
<?php }
}
?>