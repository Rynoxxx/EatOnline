<?php /* Smarty version 3.1.27, created on 2016-02-15 00:53:24
         compiled from "template\prodotto_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1870956c11374f13cb3_56698088%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7129b2b24fa3ba7bea46819cc5a51e75eae4f69' => 
    array (
      0 => 'template\\prodotto_list.tpl',
      1 => 1455382264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1870956c11374f13cb3_56698088',
  'variables' => 
  array (
    'content_title' => 0,
    'prodotti' => 0,
    'num_pages' => 0,
    'task' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c1137506b500_49531667',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c1137506b500_49531667')) {
function content_56c1137506b500_49531667 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1870956c11374f13cb3_56698088';
?>
<div class="content">
    <div class="content_title"><?php echo $_smarty_tpl->tpl_vars['content_title']->value;?>
</div>
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
            <?php echo $_smarty_tpl->getSubTemplate ("prodotto_default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prodotto'=>$_smarty_tpl->tpl_vars['prodotti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]), 0);
?>

            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']%3 == 0) {?>
                <div class="interline_space"></div>
            <?php }?>
        <?php endfor; endif; ?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['num_pages']->value != 1) {?>
        <div class="navig_pages">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['num_pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total']);
?>
                <a href="index.php?controller=prodotto&task=<?php echo $_smarty_tpl->tpl_vars['task']->value;?>
&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['iteration']-1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['iteration'];?>
</a>
            <?php endfor; endif; ?>
        </div>
    <?php }?>
</div>
<?php }
}
?>