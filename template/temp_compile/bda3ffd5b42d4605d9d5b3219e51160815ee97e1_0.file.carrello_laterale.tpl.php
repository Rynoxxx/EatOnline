<?php /* Smarty version 3.1.27, created on 2016-02-15 19:21:42
         compiled from "template\carrello_laterale.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1789656c217363ff884_91736075%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bda3ffd5b42d4605d9d5b3219e51160815ee97e1' => 
    array (
      0 => 'template\\carrello_laterale.tpl',
      1 => 1455560497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1789656c217363ff884_91736075',
  'variables' => 
  array (
    'ordine' => 0,
    'prodotto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c21736473902_65204972',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c21736473902_65204972')) {
function content_56c21736473902_65204972 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1789656c217363ff884_91736075';
?>
<html>

    <div class="container_side_items">
        <img class ="img_side_content" src="template/img/carrello_laterale.png"/>
        <h1>Carrello</h1>
        <div class="loginform">

            <div id="forajax_lat">
            <?php if ($_smarty_tpl->tpl_vars['ordine']->value['num_elementi_carrello'] == 0) {?>
                <p>Il tuo carrello &egrave; vuoto</p>
            <?php } else { ?> 
                <table id="table_carr_lat">
                    <tr>
                        <td class="nome_colonna">Nome prodotto</td>
                        <td class="nome_colonna">Prezzo prodotto</td>
                        <td class="nome_colonna">Quantit&agrave;</td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->tpl_vars['ordine']->value['prodotti'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['prodotto'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['prodotto']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['prodotto']->value) {
$_smarty_tpl->tpl_vars['prodotto']->_loop = true;
$foreach_prodotto_Sav = $_smarty_tpl->tpl_vars['prodotto'];
?>
                        <tr id="carr_laterale_prodotto-<?php echo $_smarty_tpl->tpl_vars['prodotto']->value['id_prodotto'];?>
">
                            <td class="nome"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value['nome_prodotto'];?>
</td>
                            <td class="prezzo"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value['prezzo_prodotto'];?>
 &euro;</td>
                            <td class="quantita"><?php echo $_smarty_tpl->tpl_vars['prodotto']->value['quantita_prodotto'];?>
</td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['prodotto'] = $foreach_prodotto_Sav;
}
?>
                </table>
                <div id="totale_lat">Totale spesa: <?php echo $_smarty_tpl->tpl_vars['ordine']->value['totale'];?>
 &euro;</div>    
            <?php }?>
            </div>
        </div>
    </div>

</html>
<?php }
}
?>