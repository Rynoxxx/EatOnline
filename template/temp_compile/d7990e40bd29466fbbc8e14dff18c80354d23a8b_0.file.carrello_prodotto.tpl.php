<?php /* Smarty version 3.1.27, created on 2016-02-11 22:11:10
         compiled from "template/carrello_prodotto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:160274446556bcf8ee1f8878_51097729%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7990e40bd29466fbbc8e14dff18c80354d23a8b' => 
    array (
      0 => 'template/carrello_prodotto.tpl',
      1 => 1455225033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160274446556bcf8ee1f8878_51097729',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56bcf8ee216ae4_78926214',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56bcf8ee216ae4_78926214')) {
function content_56bcf8ee216ae4_78926214 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '160274446556bcf8ee1f8878_51097729';
?>
<tr id="prodotto-<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
" class="prodotto item">
  <td class="nome"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getNome();?>
</td>
  <td class="image">
    <img id="foto" src="template/img/prodotti/<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getImmagine();?>
" />
  </td>
  <td class="prezzo">Prezzo: <?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getPrezzo();?>
 &euro;</td>
  <td class="subTotale">Sub Totale: <?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getPrezzo()*$_smarty_tpl->tpl_vars['prodotto']->value->_quantita;?>
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