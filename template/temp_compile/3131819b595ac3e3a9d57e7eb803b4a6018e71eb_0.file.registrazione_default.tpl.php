<?php /* Smarty version 3.1.27, created on 2016-02-13 05:44:26
         compiled from "template\registrazione_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1940256beb4aa1fe859_50251391%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3131819b595ac3e3a9d57e7eb803b4a6018e71eb' => 
    array (
      0 => 'template\\registrazione_default.tpl',
      1 => 1455338659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1940256beb4aa1fe859_50251391',
  'variables' => 
  array (
    'errore' => 0,
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56beb4aa265c23_11459175',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56beb4aa265c23_11459175')) {
function content_56beb4aa265c23_11459175 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1940256beb4aa1fe859_50251391';
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
                <p>Ciao</p>
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