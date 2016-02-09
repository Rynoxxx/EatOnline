<?php /* Smarty version 3.1.27, created on 2016-02-10 00:26:43
         compiled from "template/prodotto_small.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:43833281656ba75b3ba5943_37872732%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34f92a6b7bf9d887eec7bf1193707d72ed5fa6f1' => 
    array (
      0 => 'template/prodotto_small.tpl',
      1 => 1455060400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43833281656ba75b3ba5943_37872732',
  'variables' => 
  array (
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ba75b3bada40_71344344',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ba75b3bada40_71344344')) {
function content_56ba75b3bada40_71344344 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '43833281656ba75b3ba5943_37872732';
?>
<tr class="prodotto item">
    <td id="nome"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getNome();?>
</td>
    <td>
        <img id="foto" src="template/img/prodotti/<?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getImmagine();?>
"/>
    </td>
    <td id="prezzo"><b>Prezzo:</b> <?php echo $_smarty_tpl->tpl_vars['prodotto']->value->getPrezzo();?>
 &euro;</td>
    <td id="quantita"><b>Prezzo:</b> <?php echo $_smarty_tpl->tpl_vars['prodotto']->value->_quantita;?>
 &euro;</td>
</tr>
<?php }
}
?>