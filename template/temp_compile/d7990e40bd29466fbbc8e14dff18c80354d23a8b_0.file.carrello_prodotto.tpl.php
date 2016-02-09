<?php /* Smarty version 3.1.27, created on 2016-02-10 00:42:42
         compiled from "template/carrello_prodotto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:82645152556ba7972ed50d5_22679344%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7990e40bd29466fbbc8e14dff18c80354d23a8b' => 
    array (
      0 => 'template/carrello_prodotto.tpl',
      1 => 1455061359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82645152556ba7972ed50d5_22679344',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ba7972ee2901_13810805',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ba7972ee2901_13810805')) {
function content_56ba7972ee2901_13810805 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '82645152556ba7972ed50d5_22679344';
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
    <td class="quantita"><b><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->_quantita;?>
</td>
    <td class="buttons"><a  href="index.php?controller=carrello&task=aggiungi.<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
" class="inc-button">+</a>
    <a  href="index.php?controller=carrello&task=elimina.<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getId();?>
" class="inc-button">-</a></td>
</tr>
<?php }
}
?>