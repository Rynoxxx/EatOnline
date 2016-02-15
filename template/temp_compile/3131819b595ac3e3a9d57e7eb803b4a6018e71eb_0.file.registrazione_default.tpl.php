<?php /* Smarty version 3.1.27, created on 2016-02-15 01:04:49
         compiled from "template\registrazione_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2849556c11621668d62_59329304%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3131819b595ac3e3a9d57e7eb803b4a6018e71eb' => 
    array (
      0 => 'template\\registrazione_default.tpl',
      1 => 1455494686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2849556c11621668d62_59329304',
  'variables' => 
  array (
    'errore' => 0,
    'logged' => 0,
    'numero_utente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c116216d1a15_66332335',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c116216d1a15_66332335')) {
function content_56c116216d1a15_66332335 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2849556c11621668d62_59329304';
?>
<!DOCTYPE html>
<html>

    <div class="container_log">

        

        <?php if ($_smarty_tpl->tpl_vars['errore']->value != NULL) {?>
            <p><?php echo $_smarty_tpl->tpl_vars['errore']->value;?>
</p>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
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
            <div class="loginform">
                <p>Ciao <font color=red>f<?php echo $_smarty_tpl->tpl_vars['numero_utente']->value;?>
</font></p>
                <p>Hai tot elementi nel carrello</p>
            <form method="get" action="index.php">
                
                <input type="hidden" name="controller" value="registrazione"/>
                <input type="hidden" name="task" value="logout"/>
                <button type="submit">Logout</button>
                    
            </form>
            </div>
        <?php }?>
        

    </div>

</html><?php }
}
?>