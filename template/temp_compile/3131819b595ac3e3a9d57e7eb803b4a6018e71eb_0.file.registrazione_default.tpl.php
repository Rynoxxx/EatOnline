<?php /* Smarty version 3.1.27, created on 2016-02-21 04:41:56
         compiled from "template\registrazione_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1245656c93204d38708_97869327%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3131819b595ac3e3a9d57e7eb803b4a6018e71eb' => 
    array (
      0 => 'template\\registrazione_default.tpl',
      1 => 1456026029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1245656c93204d38708_97869327',
  'variables' => 
  array (
    'logged' => 0,
    'errore' => 0,
    'utente' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c93204db3125_75995843',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c93204db3125_75995843')) {
function content_56c93204db3125_75995843 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1245656c93204d38708_97869327';
?>
<html>

    <div class="container_side_items">

        <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
            <img class ="img_side_content" src="template/img/login.png"/>
            <h1>Login</h1>
            <div class="loginform">

                <form method="post" action="index.php">

                    <input type="hidden" name="controller" value="registrazione"/>
                    <input type="hidden" name="task" value="autentica"/>

                    <fieldset>

                        <p>
                            <label for="numero_tel" class="loginform_label" >Numero di telefono:</label>
                            <input type="text" name="numero_tel" id="numero_tel" tabindex="1" class="field" value="3471173932"/>
                        </p>

                        <p>
                            <label for="password" class="loginform_label">Password:</label>
                            <input type="password" name="password" id="password" tabindex="1" class="field"/>
                        </p>

                        <p>
                            <button type="submit">Login</button>
                        </p>

                    </fieldset>
                </form>

                <div class="log_error">
                    <?php if ($_smarty_tpl->tpl_vars['errore']->value['login'] != NULL) {?>
                        <p><?php echo $_smarty_tpl->tpl_vars['errore']->value['login'];?>
</p>
                    <?php }?>
                </div>

            </div>
        <?php } else { ?>
            <img class ="img_side_content" src="template/img/login.png"/>
            <h1>Area Utente</h1>
            <div class="loginform">
                <div class="infoUtente">
                    <p>Nome: <?php echo $_smarty_tpl->tpl_vars['utente']->value['nome'];?>
</p>
                    <p>Cognome: <?php echo $_smarty_tpl->tpl_vars['utente']->value['cognome'];?>
</p>
                    <p>Tipo Utente: <?php echo $_smarty_tpl->tpl_vars['utente']->value['tipo_utente'];?>
</p>
                </div>
                <form method="get" action="index.php">

                    <input type="hidden" name="controller" value="registrazione"/>
                    <input type="hidden" name="task" value="logout"/>
                    <button type="submit">Logout</button>

                </form>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <div class="admin">
                <h2>Opzioni Amministratore</h2>
                <a href="index.php?controller=prodotto&task=all">Gestione Prodotti</a>
            </div>
        <?php }?>

    </div>

</html>
<?php }
}
?>