<?php /* Smarty version 3.1.27, created on 2016-02-15 00:54:33
         compiled from "template\carrello_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1451756c113b9442608_08815103%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae65a8f35263df8b16349a50066555153d8b2892' => 
    array (
      0 => 'template\\carrello_default.tpl',
      1 => 1455378701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1451756c113b9442608_08815103',
  'variables' => 
  array (
    'prodotti' => 0,
    'tot' => 0,
    'subTot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c113b94f0826_26662696',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c113b94f0826_26662696')) {
function content_56c113b94f0826_26662696 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1451756c113b9442608_08815103';
?>
<div class="carrello">
    <h1>CARRELLO</h1>
    <table>
        <div id="forajax"></div>
        <?php if ((count($_smarty_tpl->tpl_vars['prodotti']->value)) != 0) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['prodotti']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                <?php echo $_smarty_tpl->getSubTemplate ("carrello_prodotto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prodotto'=>$_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]), 0);
?>

                <?php $_smarty_tpl->tpl_vars["subTot"] = new Smarty_Variable(($_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getPrezzo()*$_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->_quantita), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["tot"] = new Smarty_Variable(($_smarty_tpl->tpl_vars['tot']->value+$_smarty_tpl->tpl_vars['subTot']->value), null, 0);?>
            <?php endfor; endif; ?>
        <?php }?>
        <?php if ((count($_smarty_tpl->tpl_vars['prodotti']->value)) == 0) {?>
            <h2>Il tuo carrello è vuoto!</h2>
        <?php }?>

    </table>
    <?php if ((count($_smarty_tpl->tpl_vars['prodotti']->value)) != 0) {?>
        <div id="totale">Totale: <?php echo $_smarty_tpl->tpl_vars['tot']->value;?>
 &euro;</div>
        <input id="conferma" type="button" value="Conferma Ordine" onclick="info()"> 
    <?php }?>
</div>
<?php }
}
?>