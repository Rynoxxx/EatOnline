<?php /* Smarty version 3.1.27, created on 2016-01-03 17:37:53
         compiled from "template\registrazione_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1379556894e61c85fc9_00761732%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3131819b595ac3e3a9d57e7eb803b4a6018e71eb' => 
    array (
      0 => 'template\\registrazione_default.tpl',
      1 => 1451838154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1379556894e61c85fc9_00761732',
  'variables' => 
  array (
    'errore' => 0,
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56894e61d0da91_22725993',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56894e61d0da91_22725993')) {
function content_56894e61d0da91_22725993 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1379556894e61c85fc9_00761732';
?>
<!DOCTYPE html>
<html>

    <div class="subcontent-box">

        

        <?php if ($_smarty_tpl->tpl_vars['errore']->value != NULL) {?>
            <p><?php echo $_smarty_tpl->tpl_vars['errore']->value;?>
</p>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
            <h1 class="login">Login</h1>
            <div class="loginform">

                <form method="post" action="index.php">

                    <input type="hidden" name="controller" value="registrazione"/>
                    <input type="hidden" name="task" value="autentica"/>

                    <fieldset>

                        <p>
                            <label for="username" class="top" >Numero di telefono:</label>
                            <input type="text" name="numero_tel" id="numero_tel" tabindex="1" class="field" value="3899365280"/>
                        </p>

                        <p>
                            <label for="password" class="top">Password:</label>
                            <input type="password" name="password" id="password" tabindex="1" class="field"/>
                        </p>

                        <p>
                            <button type="submit">Login</button>
                        </p>

                    </fieldset>
                </form>
            </div>
        <?php } else { ?> 
            <form method="get" action="index.php">
                
                <input type="hidden" name="controller" value="registrazione"/>
                <input type="hidden" name="task" value="logout"/>
                <button type="submit">Logout</button>
                    
            </form>
        <?php }?>
        

    </div>

</html><?php }
}
?>