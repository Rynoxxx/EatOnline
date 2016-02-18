<?php /* Smarty version 3.1.27, created on 2016-02-18 02:26:40
         compiled from "template/prodotto_list_small.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165175051256c51dd04e9249_80536740%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4499e2560ddab587af6f7e1b6b034345cdd65310' => 
    array (
      0 => 'template/prodotto_list_small.tpl',
      1 => 1455758797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165175051256c51dd04e9249_80536740',
  'variables' => 
  array (
    'admin' => 0,
    'prodotti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c51dd0504213_79282204',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c51dd0504213_79282204')) {
function content_56c51dd0504213_79282204 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '165175051256c51dd04e9249_80536740';
if ($_smarty_tpl->tpl_vars['admin']->value) {?>
<div class="content">

  <?php if ((count($_smarty_tpl->tpl_vars['prodotti']->value)) != 0) {?> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
  <div class="prodotto-edit">
    <form class="prodotto-form" id="prodotto-form-<?php echo $_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getId();?>
">
      <input class="id" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getId();?>
" readonly/>
      <input class="nome" type="text" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getNome();?>
" />
      <br>
      <textarea rows=4 class="ingredienti" type="text" name="ingredienti" value=""><?php echo $_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getIngredienti();?>
</textarea>
      <br>
      <input class="prezzo" type="text" name="prezzo" value="<?php echo $_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getPrezzo();?>
" />
    </form>
    <button class="salva" onclick="formProdottoSubmit(<?php echo $_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getId();?>
)">Salva</button>
  </div>
  <?php endfor; endif; ?> <?php }?>
</div>
<?php } else { ?>
<div class="noauth">NON AUTORIZZATO!</div>
<?php }

}
}
?>