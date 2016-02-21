<?php /* Smarty version 3.1.27, created on 2016-02-21 04:56:42
         compiled from "template\home_contatti.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:223556c9357a11db16_40196296%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14093b924661580ee31cafcf6f532e6499a82b86' => 
    array (
      0 => 'template\\home_contatti.tpl',
      1 => 1456026934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223556c9357a11db16_40196296',
  'variables' => 
  array (
    'content_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c9357a177a81_83441589',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c9357a177a81_83441589')) {
function content_56c9357a177a81_83441589 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '223556c9357a11db16_40196296';
?>
<html>
    <head>
        <?php echo '<script'; ?>
 src="http://maps.googleapis.com/maps/api/js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/googleMap.js"><?php echo '</script'; ?>
>
    </head>

    <body>
        <div class="content_title"><?php echo $_smarty_tpl->tpl_vars['content_title']->value;?>
</div>
        <div id="googleMap"></div>
        <div id="contatti">
            <p class="pContatti">EatOnline</p>
            <p class="pContatti">Via dei Piccolomini, 8</p>
            <p class="pContatti">L'Aquila (AQ)</p>
            <p class="pContatti">Telefono: 0862457865</p>
            <p class="pContatti">Telefono cellulare: 3899365280</p>
            <p class="pContatti">Email: gennaro.m87@gmail.com</p>
        </div>
    </body>
</html><?php }
}
?>