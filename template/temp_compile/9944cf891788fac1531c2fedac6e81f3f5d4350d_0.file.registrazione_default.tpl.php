<?php /* Smarty version 3.1.27, created on 2016-02-18 02:17:50
         compiled from "template/registrazione_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:153569210956c51bbea29245_41570704%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9944cf891788fac1531c2fedac6e81f3f5d4350d' => 
    array (
      0 => 'template/registrazione_default.tpl',
      1 => 1455758266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153569210956c51bbea29245_41570704',
  'variables' => 
  array (
    'errore' => 0,
    'logged' => 0,
    'utente' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c51bbea38b30_43872509',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c51bbea38b30_43872509')) {
function content_56c51bbea38b30_43872509 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153569210956c51bbea29245_41570704';
?>
<!DOCTYPE html>
<html>

    <div class="container_side_items">



        <?php if ($_smarty_tpl->tpl_vars['errore']->value != NULL) {?>
            <p><?php echo $_smarty_tpl->tpl_vars['errore']->value;?>
</p>
        <?php }?>

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
            </div>
        <?php } else { ?>
            <img class ="img_side_content" src="template/img/login.png"/>
            <h1>Ciao <?php echo $_smarty_tpl->tpl_vars['utente']->value['nome'];?>
</h1>
            <div class="loginform">
                <p>Ciao <?php echo $_smarty_tpl->tpl_vars['utente']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['utente']->value['cognome'];?>
</p>

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