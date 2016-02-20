<?php /* Smarty version 3.1.27, created on 2016-02-20 19:14:05
         compiled from "template\carrello_prodotto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1090056c8aced625075_46773645%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b2ce2c3b730f6aa5b0f7180f025c87157396bb2' => 
    array (
      0 => 'template\\carrello_prodotto.tpl',
      1 => 1455992042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090056c8aced625075_46773645',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c8aced68f7f8_76043629',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c8aced68f7f8_76043629')) {
function content_56c8aced68f7f8_76043629 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1090056c8aced625075_46773645';
?>
<tr id="prodotto-<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
" class="item">
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